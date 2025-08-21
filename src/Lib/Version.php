<?php

namespace Ahsan\AllZktecoAttandance\Lib;

use Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance;

class Version
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanAllZktecoAttandance $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_VERSION;
        $command_string = '';

        return $self->_command($command, $command_string);
    }
}
