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

