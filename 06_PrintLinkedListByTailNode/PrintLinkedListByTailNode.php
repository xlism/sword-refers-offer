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
        $length = count($stack);
        for ($i = $length - 1; $i >= 0; $i--) {
            var_dump($stack[$i]);
        }

        return true;
    }
}

//test
$t = new PrintLinkedListByTailNode();
$node = new Node(0);
$node->next = new Node(1);
$node->next->next = new Node(2);

$r = $t->printByTailNode($node);
