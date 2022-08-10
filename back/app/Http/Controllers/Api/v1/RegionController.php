<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Api\ApiController;
use App\Models\Region;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * @group Region
 *
 */
class RegionController extends ApiController
{
    public $modelClass = Region::class;

    /**
     * Region Get all
     *
     * @response {
     *  "id": "bigint",
     *  "name_uz": "string",
     *  "name_ru": "string",
     *  "name_en": "string",
     *  "code": "string",
     *  "country_id": "bigint",
     *  "status": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["admin"],
     * "include": ["stations"]
     * }
     * @var Request $request
     */
    public function index(Request $request)
    {
        $filters = $request->get('filter');
        $filter = [];
        if (!empty($filters)) {
            foreach ($filters as $k => $item) {
                $filter[] = AllowedFilter::exact($k);
            }
        }

        $query = QueryBuilder::for($this->modelClass);
        $query->allowedFilters($filter);
        $query->allowedAppends(!empty($request->append) ? explode(',', $request->get('append')) : []);
        $query->allowedIncludes(!empty($request->include) ? explode(',', $request->get('include')) : []);
        $query->allowedSorts($request->sort);
        return $query->paginate($request->per_page);
    }

    /**
     * Region view
     *
     * @queryParam id required ID
     * @var $id
     * @response {
     *  "id": "bigint",
     *  "name_uz": "string",
     *  "name_ru": "string",
     *  "name_en": "string",
     *  "code": "string",
     *  "country_id": "bigint",
     *  "status": "integer",
     *  "deleted_at": "datetime",
     *  "created_at": "datetime",
     *  "updated_at": "datetime",
     * "roles": ["all"]
     * }
     */
    public function show(Request $request, $id)
    {
        $model = $this->modelClass::findOrFail($id);

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Region create
     *
     * @bodyParam id bigint no-required id
     * @bodyParam name_uz string no-required name_uz
     * @bodyParam name_ru string no-required name_ru
     * @bodyParam name_en string no-required name_en
     * @bodyParam code string no-required code
     * @bodyParam country_id bigint no-required country_id
     * @bodyParam status integer no-required status
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     *
     * @var Request $request
     */
    public function create(Request $request)
    {
        $request->validate($this->modelClass::rules());
        $model = $this->modelClass::create($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Region update
     *
     * @queryParam id required ID
     * @bodyParam id bigint no-required id
     * @bodyParam name_uz string no-required name_uz
     * @bodyParam name_ru string no-required name_ru
     * @bodyParam name_en string no-required name_en
     * @bodyParam code string no-required code
     * @bodyParam country_id bigint no-required country_id
     * @bodyParam status integer no-required status
     * @bodyParam deleted_at datetime no-required deleted_at
     * @bodyParam created_at datetime no-required created_at
     * @bodyParam updated_at datetime no-required updated_at
     *
     * @var $id
     * @var Request $request
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->modelClass::rules());

        $model = $this->modelClass::findOrFail($id);
        $model->update($request->all());

        if (!empty($request->append)) {
            $model->append(explode(',', $request->append));
        }
        if (!empty($request->include)) {
            $model->load(explode(',', $request->include));
        }

        return $model;
    }

    /**
     * Region delete
     *
     * @queryParam id required ID
     *
     * @var $id
     */
    public function destroy(int $id)
    {
        $model = $this->modelClass::findOrFail($id);
        $model->delete();
        return response()->json('deleted', 204);
    }
}
