<?php

declare(strict_types=1);

namespace dacoto\SetEnv\Facades;

use dacoto\SetEnv\SetEnv;
use Illuminate\Support\Facades\Facade;

/**
 * @method static load($filePath = null): SetEnv
 * @method static getContent()
 * @method static getLines(): array
 * @method static getValue($key)
 * @method static getKeys($keys = []): array
 * @method static getBuffer()
 * @method static addEmpty(): SetEnv
 * @method static addComment($comment): SetEnv
 * @method static setKey($key, $value = null, $comment = null, $export = false): SetEnv
 * @method static setKeys($data): SetEnv
 * @method static keyExists($key): bool
 * @method static deleteKey($key): SetEnv
 * @method static deleteKeys($keys = []): SetEnv
 * @method static save(): SetEnv
 *
 * @see \dacoto\SetEnv\SetEnv
 */
class SetEnv extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SetEnv::class;
    }
}
