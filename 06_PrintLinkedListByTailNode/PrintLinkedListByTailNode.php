<?php
/**
 * User: sammyle
 * Date: 2020-04-14
 * Time: 22:08
 */

/**
 * 从尾到头打印链表
 * Class PrintLinkedListByTailNode
 */
class Node
{
    private $val;
    private $next;

    public function __construct($val)
    {
        $this->val = $val;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}

class PrintLinkedListByTailNode
{
    public function __construct()
    {
    }

    /**
     * 将链表节点存入栈，再由栈结构逐个返回
     *
     * @param Node $head
     * @return mixed
     */
    public function printByTailNode(Node $head)
    {
        //数组模拟栈行为
        $stack = [];
        $stack[] = $head;
        $node = $head->next;
        while ($node !== null) {
            $stack[] = $node;
            $node = $node->next;
        }
        for ($i = count($stack) - 1; $i >= 0; $i--) {
            return $stack[$i];
        }
    }
}