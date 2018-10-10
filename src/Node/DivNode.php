<?php

namespace HtmlPurifier\Node;

class DivNode extends AbstractNode implements AttributesNodeInterface
{
    use TagNodeTrait;
    use ChildrenTrait;

    public function getTagName(): string
    {
        return 'div';
    }
}