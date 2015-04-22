<?php
/**
 * src/BigEyesSolution/RESTService/Router.php
 *
 * This file is part of Big Eyes Solution EventApp.
 *
 *  Foobar is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Foobar is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */
 
/**
 * service.bigeyessolution.com/base/{event_id}/model/[resource][?session=1233&param1=val1&param2=val2...]
 */
class Router {
	protected $uri_resource;
	protected $url_resource_base ;
	protected $verb;
    protected $eventID;
	protected $restModel;
	protected $session = FALSE;
	protected $view = FALSE;
	
	/**
	 */
	public function __construct ()
	{
	   //@TODO: Explode uri and populate $this->uri_path
	}
	
	public function execVerb ()
	{
	
	}
	
	public function sendResult ()
	{
	
	}
	
	public function RESTModelFactory ()
	{
		return FALSE;
	}
}
