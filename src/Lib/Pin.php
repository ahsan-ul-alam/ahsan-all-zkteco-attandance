<?php

namespace Ahsan\AllZktecoAttandance\Lib;

use Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance;

class Pin
{
    /**
     * @return bool|mixed
     */
    public static function width(AhsanAllZktecoAttandance $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~PIN2Width';

        return $self->_command($command, $command_string);
    }
}
