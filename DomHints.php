<?php
  //important trick "$node->ownerDocument->" to save cells along with html content

                    foreach ($cols as $node) {
                        
                        $tableHeadRows[] = $node->ownerDocument->saveHTML($node);

                    }

