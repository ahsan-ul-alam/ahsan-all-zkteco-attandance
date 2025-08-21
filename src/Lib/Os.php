<?php

namespace Ahsan\AllZktecoAttandance\Lib;

use Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance;

class Os
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanAllZktecoAttandance $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~OS';

        return $self->_command($command, $command_string);
    }
}
