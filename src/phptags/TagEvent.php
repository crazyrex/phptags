<?php
/**
 * This file is part of phptags.
 *
 * phptags is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 3 of the License.
 *
 * phptags is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with phptags. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category phptags
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPL
 * @copyright Copyright 2011 Evan Coury (http://evan.pro/)
 * @package TagEvent
 */

namespace phptags;

use Zend\EventManager\Event;

class TagEvent extends Event
{
    /**
     * Set the name of the tag 
     * 
     * @param string $tagName 
     * @return TagEvent
     */
    public function setTagName($tagName)
    {
        $this->setParam('tagname', $tagName);
        return $this;
    }

    /**
     * Get the name of the tag 
     * 
     * @return string
     */
    public function getTagName()
    {
        return $this->getParam('tagname');
    }

    /**
     * Set the raw line to be rendered 
     * 
     * @param string $rawLine 
     * @return TagEvent
     */
    public function setRawLine($rawLine)
    {
        $this->setParam('rawline', $rawLine);
        return $this;
    }

    /**
     * Get the raw line to be rendererd 
     * 
     * @return string
     */
    public function getRawLine()
    {
        return $this->getParam('rawline');
    }
}
