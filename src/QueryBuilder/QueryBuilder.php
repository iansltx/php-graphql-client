<?php

namespace GraphQL\QueryBuilder;

use GraphQL\InlineFragment;
use GraphQL\Query;

/**
 * Class QueryBuilder
 *
 * @package GraphQL
 */
class QueryBuilder extends AbstractQueryBuilder
{
    public function selectField(string|QueryBuilderInterface|InlineFragment|Query $selectedField): static
    {
        return parent::selectField($selectedField);
    }

    /**
     * @param array<string|QueryBuilderInterface|InlineFragment|Query> $fields
     *
     * @return static
     */
    protected function selectFields(array $fields): static
    {
        foreach ($fields as $field) {
            parent::selectField($field);
        }

        return $this;
    }

    /**
     * Changing method visibility to public
     *
     * @param string $argumentName
     * @param        $argumentValue
     *
     * @return AbstractQueryBuilder|QueryBuilder
     */
    public function setArgument(string $argumentName, $argumentValue)
    {
        return parent::setArgument($argumentName, $argumentValue);
    }

    /**
     * Changing method visibility to public
     *
     * @param string $name
     * @param string $type
     * @param bool   $isRequired
     * @param null   $defaultValue
     *
     * @return AbstractQueryBuilder|QueryBuilder
     */
    public function setVariable(string $name, string $type, bool $isRequired = false, $defaultValue = null)
    {
        return parent::setVariable($name, $type, $isRequired, $defaultValue);
    }
}