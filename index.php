<?php

/**
 * Copyright (c) Christoph M. Becker
 *
 * This file is part of Dlcounter_XH.
 *
 * Dlcounter_XH is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Fa_XH is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Dlcounter_XH.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * Changed by Alessandro Lin - www.csimple.it - october 2026
 */

use Dlcounter\Dic;
use Plib\Request;

include_once './plugins/Plib_XH/classes/Request.php';
include_once './plugins/Plib_XH/classes/Url.php';
include_once './plugins/Plib_XH/classes/Response.php';

const DLCOUNTER_VERSION = "1.1.0";

function dlcounter(string $filename): string
{
    return Dic::mainController()(Request::current(), $filename)();
}
