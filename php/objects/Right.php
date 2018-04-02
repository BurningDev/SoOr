<?php
class Right {
    private $id;
    private $right;
    private $admin;

    public function getId()
    {
        return $this->id;
    }

    public function getRight()
    {
        return $this->right;
    }

    public function getAdmin()
    {
        return $this->admin;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setRight($right)
    {
        $this->right = $right;
    }

    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}
?>