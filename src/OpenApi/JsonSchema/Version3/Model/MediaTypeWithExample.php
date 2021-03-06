<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Model;

class MediaTypeWithExample extends \ArrayObject
{
    /**
     * @var Schema|Reference
     */
    protected $schema;
    /**
     * @var mixed
     */
    protected $example;
    /**
     * @var Encoding[]
     */
    protected $encoding;

    /**
     * @return Schema|Reference
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @param Schema|Reference $schema
     *
     * @return self
     */
    public function setSchema($schema): self
    {
        $this->schema = $schema;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     *
     * @return self
     */
    public function setExample($example): self
    {
        $this->example = $example;

        return $this;
    }

    /**
     * @return Encoding[]
     */
    public function getEncoding(): ?\ArrayObject
    {
        return $this->encoding;
    }

    /**
     * @param Encoding[] $encoding
     *
     * @return self
     */
    public function setEncoding(?\ArrayObject $encoding): self
    {
        $this->encoding = $encoding;

        return $this;
    }
}
