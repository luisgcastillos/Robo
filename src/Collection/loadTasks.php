<?php
namespace Robo\Collection;

trait loadTasks
{
    /**
     * Run a callback function on each item in a collection
     *
     * @param array $collection
     *
     * @return \Robo\Collection\TaskForEach
     */
    protected function taskForEach($collection)
    {
        return $this->task(TaskForEach::class, $collection);
    }
}
