<?php

namespace App\Repositories;

use App\Http\Resources\MarketPlaceResource;
use App\Models\Employee;
use App\Models\MarketplaceOwner;
use App\Models\Marketplaces;
use App\Models\Supervisor;
use Exception;
use Illuminate\Container\Container as Application;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;


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
     * @param  Application  $app
     *
     * @throws Exception
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Make Model instance
     *
     * @return Model
     * @throws Exception
     *
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * Configure the Model
     *
     * @return string
     */
    abstract public function model();

    /**
     * Paginate records for scaffold.
     *
     * @param  int  $perPage
     * @param  array  $columns
     * @return LengthAwarePaginator
     */
    public function paginate($perPage, $columns = ['*'])
    {
        $query = $this->allQuery();

        return $query->paginate($perPage, $columns);
    }

    /**
     * Build a query for retrieving all records.
     *
     * @param  array  $search
     * @param  int|null  $skip
     * @param  int|null  $limit
     * @return Builder
     */
    public function allQuery($search = [], $skip = null, $limit = null)
    {
        $query = $this->model->newQuery();

        if (count($search)) {
            foreach ($search as $key => $value) {
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
     * Get searchable fields array
     *
     * @return array
     */
    abstract public function getFieldsSearchable();

    /**
     * Retrieve all records with given filter criteria
     *
     * @param  array  $search
     * @param  int|null  $skip
     * @param  int|null  $limit
     * @param  array  $columns
     *
     * @return LengthAwarePaginator|Builder[]|Collection
     */
    public function all($search = [], $skip = null, $limit = null, $columns = ['*'])
    {
        $query = $this->allQuery($search, $skip, $limit);

        return $query->get($columns);
    }

    /**
     * Create model record
     *
     * @param  array  $input
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
     * Create model With User
     *
     * @param  array  $input
     *
     * @return Model
     */
    public function CreateWithUser($input)
    {
        $model = $this->model->newInstance($input);

        $model->save();

        return $model;
    }


    /**
     * Find model record for given id
     *
     * @param  int  $id
     * @param  array  $columns
     *
     * @return Builder|Builder[]|Collection|Model|null
     */
    public function find($id, $columns = ['*'])
    {
        $query = $this->model->newQuery();

        return $query->find($id, $columns);
    }

    /**
     * Update model record for given id
     *
     * @param  array  $input
     * @param  int  $id
     *
     * @return Builder|Builder[]|Collection|Model
     */
    public function update($input, $id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        $model->fill($input);

        $model->save();

        return $model;
    }

    /**
     * @param  int  $id
     *
     * @return bool|mixed|null
     * @throws Exception
     *
     */
    public function delete($id)
    {
        $query = $this->model->newQuery();

        $model = $query->findOrFail($id);

        return $model->delete();
    }


    /**
     * Get query source of dataTable.
     *
     * @param  string; $model
     * @param  string; $Where_Column
     * @return array
     */

    public function GetDataForSelect($table, $Where_Column = null)
    {
        return
            DB::table($table)->select(['id', 'Name'])
                ->where($Where_Column, ($Where_Column == null) ? null : auth()->user()->id)
                ->get()->pluck('Name', 'id')->toArray();

    }


    public function StoreFile($file, $default = '')
    {
        if ($file != null) {
            $img = Storage::disk('public')->put('images', $file);
            return $img;
        } else {
            return $default;
        }
    }


    /**
     * Get The OwnerID Even If he is himself
     * @return Integer
     */
    public function GetMyOwner()
    {
        $currentUserID = auth()->user()->id;
        if (MarketplaceOwner::find($currentUserID)) {
            return $currentUserID;
        } elseif (Supervisor::find($currentUserID)) {
            return Supervisor::find($currentUserID)->marketplaceowner->id;
        } elseif (Employee::find($currentUserID)) {
            return Employee::find($currentUserID)->marketplaceowner->id;
        }


    }


}
