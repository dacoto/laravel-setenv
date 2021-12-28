<?php

namespace dacoto\SetEnv\Tests;

use dacoto\SetEnv\Facades\SetEnv;

class SetEnvEditorTest extends TestCase
{
    public function testCanLoad(): void
    {
        $this->assertNotNull(SetEnv::getKeys());
        $this->assertEquals('ONE', SetEnv::getValue('ENV_VAR_1'));
    }
}
