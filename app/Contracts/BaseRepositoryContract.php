<?php


namespace App\Contracts;


/**
 * Interface BaseRepositoryContract
 * @package App\Contracts
 */
interface BaseRepositoryContract
{
    /**
     * @param array $data
     * @return
     */
    public function create(array $data);

    /**
     * @param $id
     * @return Model
     */
    public function find($id);

    /**
     * @param $id
     * @param array $data
     * @return Model
     */
    public function update($id, array $data);

    /**
     * @param $id
     * @return integer
     */
    public function delete($id);

}
