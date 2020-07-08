<?php

namespace App\Repositories;

use App\Http\Resources\MarketPlaceResource;
use App\Models\MarketplaceOwner;
use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;



abstract class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Application
     */
    protected $app;

    /**
     * @param Application $app
     *
     * @throws \Exception
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Get searchable fields array
     *
     * @return array
     */
    abstract public function getFieldsSearchable();

    /**
     * Configure the Model
     *
     * @return string
     */
    abstract public function model();

    /**
     * Make Model instance
     *
     * @throws \Exception
     *
     * @return Model
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new \Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * Paginate records for scaffold.
     *
     * @param int $perPage
     * @param array $columns
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage, $columns = ['*'])
    {
        $query = $this->allQuery();

        return $query->paginate($perPage, $columns);
    }

    /**
     * Build a query for retrieving all records.
     *
     * @param array $search
     * @param int|null $skip
     * @param int|null $limit
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function allQuery($search = [], $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        if (count($search)) {
            foreach($search as $key => $value) {
                if (in_array($key, $this->getFieldsSearchable())) {
                    $query->where($key, $value);
                }
            }
        }

        if (!is_null($skip)) {
            $query->skip($skip);
        }

        if (!is_null($limit)) {
            $query->limit($limit);
        }

        return $query;
    }

    /**
     * Retrieve all records with given filter criteria
     *
     * @param array $search
     * @param int|null $skip
     * @param int|null $limit
     * @param array $columns
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);

        return $query->get($columns);
    }

    /**
     * Create model record
     *
     * @param array $input
     *
     * @return Model
     */
    public function create($input)
    {
        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }

    /**
     * Find model record for given id
     *
     * @param int $ID
     * @param array $columns
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model|null
     */
    public function find($ID , $columns = ['*'])
    {
        $query = $this->model->newQuery();

        return $query->find($ID , $columns);
    }

    /**
     * Update model record for given id
     *
     * @param array $input
     * @param int $ID
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|Model
     */
    public function update($input, $ID )
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($ID );

        $model->fill($input);

        $model->save();

        return $model;
    }

    /**
     * @param int $ID
     *
     * @throws \Exception
     *
     * @return bool|mixed|null
     */
    public function delete($ID )
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($ID );

        return $model->delete();
    }
    public function GetDataForSelect($table){
        $aaa = DB::table($table)->select('ID','Name')->get();
        $items = array();
        foreach ($aaa  as $a){
            $items["$a->ID"] = $a->Name;
        }
        return $items;
    }
    public function GetAllMarketPlaceOwners(){
        $marketplaces = DB::table('marketplace_owners')
            ->join('users', 'marketplace_owners.UserID', '=', 'users.ID')
            ->select('marketplace_owners.ID', 'users.Name')
            ->get();
        $items = array();
        foreach ($marketplaces  as $a){
            $items["$a->ID"] = $a->Name;
        }
        return $items;
    }
    public function StoreFile(UploadedFile $file,$default = ''){
        if (isset($file)){
            $img = Storage::disk('public')->put('storage/images',$file);
            return $img;
        }else{
            return $default;
        }
    }
}
