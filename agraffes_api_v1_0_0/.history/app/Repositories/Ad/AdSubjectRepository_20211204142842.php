<?php

namespace App\Repositories\Ad;

use App\Models\AdSubject;
use Illuminate\Support\Facades\Storage;



class AdSubjectRepository
{
    private $model;
    const path = SubjectPath;
    public function __construct(AdSubject $adSubject)
    {
        $this->model = $adSubject;
        $this->modeltable = 'ad_subject';
    }
    public function all($columns = '*', $field = NULL)
    {
        return $this->model::select(checkColumns($columns))->where(str2arr($field))->get()->toArray();
    }
    public function paginate($size = 10, $page = 1, $columns = '*', $field = NULL)
    {
        $col = checkColumns($columns);
        $where = str2arr($field);
        return $this->model::select($col)->where($where)->paginate($size);
    }
    public function find($id, $columns = '*')
    {
        return $this->model::select(checkColumns($columns))->find($id);
    }
    public function findBy($otherKey, $columns = '*', $field = NULL)
    {
        $otherKeyArr = str2arr($otherKey);
        $field = str2arr($field);
        return $this->model::select(checkColumns($columns))->where(array_merge($otherKeyArr, $field))->get()->toArray();
    }
    public function create(array $data)
    {
        return $data;
        // foreach ($data as $key => $value) {
        //     if (is_object($value)) {
        //         $data[$key] = 'storage/' . Storage::putFile(self::path, $value);
        //     }
        // }
        // return $this->model::create($data);
    }
    public function update($data = [], $id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        $modelDiffArr = model_filter_key($temps, $data);
        foreach ($modelDiffArr as $key => $value) {
            if (is_object($modelDiffArr[$key])) {
                $modelDiffArr[$key] =  fileterUpload(Storage::putFile(self::path, $value), true);
                Storage::delete(fileterUpload($temps[$key] . "/", false));
            }
        }
        return $this->model::where('id', $id)->update($modelDiffArr);
    }
    public function delete($id)
    {
        $temps = $this->model::where('id', $id)->first()->toArray();
        foreach ($temps as $value) {
            if (strstr($value, "/") && (file_exists($value))) {
                Storage::delete(fileterUpload($value . "/", false));
            }
        }
        return $this->model::destroy($id);
    }
}
