<?php
/**
 * src/BigEyesSolution/View/AbstractView.php
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
 * 
 * @author Laudivan F Almeida <laudivan@bigeyessolution.com>
 */
class AbstractView {
	protected $headers = array ();
    
	protected $response_code = 200;
    
    protected $content = FALSE;
	
	public function addHeader ($header_name, $header_content)
	{
		if ($headers === TRUE) return; //Only add if headers is not  sended;
		
		$this->headers [$header_name] = $header_content;
	}
	
	public function sendHttpHeaders () 
	{
		if ($this->headers === FALSE && array_size ($this->headers)) {
			foreach ($this->headers as $header_name => $header_content) {
				header("$header_name: $header_content");
			}
			
			$this->headers = TRUE; //Setting headers as sended.
		}
	}
	
	/**
	 * Set the http response code to be sent when this view is shown.
	 * @param integer $response_code
	 */
	public function setHttpResponseCode ($response_code)
	{
		$this->response_code = $response_code;
	}
	
	/**
	 * Send the http response code.
	 */
	public function sendHttpResponseCode ()
	{
		http_response_code ($this->response_code);
	}
    
    /**
     * Return the content top be showed by this view.
     * @return mixed
     */
    public function getContent ()
    {
        return $this->content;
    }
    
    public function __invoke ($content = FALSE)
    {
        if ($content !== FALSE) $this->content = $content;
        
        print $this;
    }   
    
    /**
     * Return a string to be showed with echo or print functions after send the
     * proper http headers.
     * @return string Return to show with echo or print
     */
    public function __toString()
    {
        $this->sendHttpHeaders();
        $this->sendHttpResponseCode();
        return $this->getContent();
    }
}
