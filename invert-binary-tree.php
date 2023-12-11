<?php

function invertTree (BinaryNode|null $binary): BinaryNode|null{
    if ($binary === null) {
        return null;
    }

    $left = invertTree($binary->left);
    $right = invertTree($binary->right);

    $binary->left = $right;
    $binary->right = $left;

    return $binary;
}

// Basic use
$root = new BinaryNode(1);
$rootLeftChild = new BinaryNode(2);
$rootRightChild = new BinaryNode(3);

$root->left = $rootLeftChild;
$root->right = $rootRightChild;

echo $root->value; // 1
echo $root->left->value; // 2
echo $root->right->value; // 3

$invertedTree = invertTree($root);

echo $invertedTree->value; // 1
echo $invertedTree->left->value; // 3
echo $invertedTree->right->value; // 2