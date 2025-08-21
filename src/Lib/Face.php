<?php

namespace Ahsan\AllZktecoAttandance\Lib;

use Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance;

class Face
{
    /**
     * @return bool|mixed
     */
    public static function on(AhsanAllZktecoAttandance $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = 'FaceFunOn';

        return $self->_command($command, $command_string);
    }
}
