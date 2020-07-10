<?php


namespace App\Repositories\Admin;


use App\Models\Marketplace;
use App\Repositories\BaseRepository;

class AxiosRepository extends BaseRepository
{
    protected $fieldSearchable = [

    ];

    /**
     * Get searchable fields array
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     *
     * @return string
     */
    public function model()
    {
        return Marketplace::class;
    }
}
