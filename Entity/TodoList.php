<?php
namespace Entity {
	class TodoList
	{
		private string $todo;
    private string $id;

		public function __construct(string $todo = "")
		{
			$this->todo = $todo;
		}

    public function getId() :int
    {
      return $this->id;
    }

    public function setId($id) :void
    {
      $this->id = $id;
    }

		public function getTodo() :string
		{
			return $this->todo;
		}

		public function setTodo($todo) :void
		{
			$this->todo = $todo;
		}
	}
}
