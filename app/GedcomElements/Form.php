<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\GedcomElements;

use Fisharebest\Webtrees\Tree;

/**
 * GEDCOM_FORM := {Size=14:20}
 * [ LINEAGE-LINKED ]
 * The GEDCOM form used to construct this transmission. There maybe other forms
 * used such as CommSoft's "EVENT_LINEAGE_LINKED" but these specifications
 * define only the LINEAGE-LINKED Form. Systems will use this value to specify
 * GEDCOM compatible with these specifications.
 */
class Form extends AbstractElement
{
    /**
     * Create a default value for this element.
     *
     * @param Tree $tree
     *
     * @return string
     */
    public function default(Tree $tree): string
    {
        return 'LINEAGE-LINKED';
    }
}
