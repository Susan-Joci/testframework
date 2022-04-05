<?php

class UsersModel extends Model
{
    function __construct()
    {
        parent::__construct('users');
    }

    function getUsersList()
    {
        $data = $this->select('')->get_all();
        return $data;
    }

    function addUser($data)
    {
        $this->insert($data,'');
        return;

    }

    function updateUser($data)
    {
        $id=$data['id'];
        $this->where('id',$id)->update($data);
        return;

    }

    function deleteUser($id)
    {
        $this->where('id',$id)->delete_row();
        return;
    }
}