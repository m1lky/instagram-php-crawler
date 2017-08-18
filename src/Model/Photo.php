<?php

declare(strict_types=1);

namespace Smochin\Instagram\Model;

class Photo extends Media
{
	 /**
     * @var int
     */
    protected $likes = 0;
    protected $comments = 0;

    /**
     * @param int       $id
     * @param string    $code
     * @param string    $url
     * @param Dimension $dimension
     * @param \DateTime $created
     * @param User      $user
     * @param array     $tags
     * @param int       $views
     * @param int       $likes
     * @param int       $comments
     * @param bool      $ad
     * @param mixed     $caption
     * @param Location  $location
     */
    public function __construct(
    	int $id,
	    string $code,
	    string $url,
	    Dimension $dimension,
	    \DateTime $created,
	    User $user,
	    array $tags,
	    int $likes = 0,
	    int $comments = 0,
	    bool $ad = false,
	    $caption = null,
	    Location $location = null
	)
    {
        $this->likes = $likes;
        $this->comments = $comments;
        parent::__construct($id, $code, $url, $dimension, $created, $user, $tags, $likes, $comments, $ad, $caption, $location);
    }

    /**
     * @return int
     */
    public function getLikes(): int
    {
        return $this->likes;
    }
    /**
     * @return int
     */
    public function getComments(): int
    {
        return $this->comments;
    }
   
}
