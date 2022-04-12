<?php

use Bvtterfly\Cycler\Cycler;

it('can cycles through 1 item', function () {
    $cycles = cycler('test');
    expect($cycles)->toBeInstanceOf(Cycler::class);
    expect($cycles)->current()->toBeNull();
    expect($cycles)->next()->toEqual('test');
    expect($cycles)->next()->toEqual('test');
    expect($cycles)->next()->toEqual('test');
    expect($cycles)->next()->toEqual('test');
});

it('can cycles through 2 items', function () {
    $cycles = cycler('odd', 'even');
    expect($cycles)->toBeInstanceOf(Cycler::class);
    expect($cycles)->current()->toBeNull();
    expect($cycles)->next()->toEqual('odd');
    expect($cycles)->next()->toEqual('even');
    expect($cycles)->next()->toEqual('odd');
});

it('can reset cycles', function () {
    $cycles = cycler('odd', 'even');
    expect($cycles)->toBeInstanceOf(Cycler::class);
    expect($cycles)->current()->toBeNull();
    expect($cycles)->next()->toEqual('odd');
    expect($cycles)->next()->toEqual('even');
    expect($cycles)->next()->toEqual('odd');
    expect($cycles)->reset()->toBeNull();
    expect($cycles)->current()->toBeNull();
    expect($cycles)->next()->toEqual('odd');
});

it('can cycles through multiple items', function () {
    $cycles = cycler(1, 2, 3, 4, 5);
    expect($cycles)->toBeInstanceOf(Cycler::class);
    expect($cycles)->current()->toBeNull();

    expect($cycles)->next()->toEqual(1);
    expect($cycles)->current()->toEqual(1);
    expect($cycles)->current()->toEqual(1);

    expect($cycles)->next()->toEqual(2);
    expect($cycles)->current()->toEqual(2);

    expect($cycles)->next()->toEqual(3);
    expect($cycles)->current()->toEqual(3);

    expect($cycles)->next()->toEqual(4);
    expect($cycles)->current()->toEqual(4);

    expect($cycles)->next()->toEqual(5);
    expect($cycles)->current()->toEqual(5);

    expect($cycles)->next()->toEqual(1);
    expect($cycles)->current()->toEqual(1);
});
