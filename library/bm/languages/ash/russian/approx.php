<?php
/*
 * Copyright Alexander Beider and Stephen P. Morse, 2008
 * Copyright Olegs Capligins, 2013-2016
 *
 * This is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * It is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 * or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 */

return [

    // VOWELS
    ["I", "", "$", "i"],
    ["I", "", "[^k]$", "i"],
    ["Ik", "[lr]", "$", "(ik|Qk)"],
    ["Ik", "", "$", "ik"],
    ["sIts", "", "$", "(sits|sQts)"],
    ["Its", "", "$", "its"],
    ["I", "[aeiEIou]", "", "i"],
    ["I", "", "", "(i|Q)"],

    ["au","","","(D|a|u)"],
    ["ou","","","(D|o|u)"],
    ["ai","","","(D|a|i)"],
    ["oi","","","(D|o|i)"],
    ["ui","","","(D|u|i)"],

    ["om","","[bp]","(om|im)"],
    ["on","","[dgkstvz]","(on|in)"],
    ["em","","[bp]","(im|om)"],
    ["en","","[dgkstvz]","(in|on)"],
    ["Em","","[bp]","(im|Ym|om)"],
    ["En","","[dgkstvz]","(in|Yn|on)"],

    ["a", "", "", "(a|o)"],
    ["e", "", "", "i"],

    ["E", "", "[fklmnprsStv]$", "i"],
    ["E", "", "ts$", "i"],
    ["E", "[DaoiuQ]", "", "i"],
    ["E", "", "[aoQ]", "i"],
    ["E", "", "", "(Y|i)"],

    ["approxrussian"]

];
