<?php

namespace Ahsan\AllZktecoAttandance\Lib;

use Ahsan\AllZktecoAttandance\AhsanAllZktecoAttandance;

class Platform
{
    /**
     * @return bool|mixed
     */
    public static function get(AhsanAllZktecoAttandance $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~Platform';

        return $self->_command($command, $command_string);
    }

    /**
     * @return bool|mixed
     */
    public static function getVersion(LaravelZkteco $self)
    {
        $self->_section = __METHOD__;

        $command = Util::CMD_DEVICE;
        $command_string = '~ZKFPVersion';

        return $self->_command($command, $command_string);
    }
}
