/*	Antoot , Script to disable right click on websites.
    Copyright (C) 2014  JIHAD SINNAOUR <j.sinnaour.official@gmail.com>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
*/
function disableRightClick(e){ 
return false 
} 

function reEnable(){ 
return true 
} 
//if IE4+ 
document.onselectstart = new Function ("return false") 
document.oncontextmenu = new Function ("return false") 
//if NS6
if (window.sidebar){ 
document.onmousedown = disableRightClick 
document.onclick = reEnable 
}
