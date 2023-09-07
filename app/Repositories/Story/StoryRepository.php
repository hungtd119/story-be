<?php

namespace App\Repositories\Story;

use App\Exceptions\ErrorException;
use App\Exceptions\StoryNotFoundException;
use App\Http\Requests\StoreStoryRequest;
use App\Http\Resources\DataCollection;
use App\Models\Story;
use App\Repositories\BaseService;
use App\Repositories\Helper\HelperInterface;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class StoryRepository extends BaseService implements StoryInterface
{
    protected $helperRepository;
    public function __construct(Story $story, HelperInterface $helperRepository)
    {
        parent::__construct($story, $helperRepository);
        $this->helperRepository = $helperRepository;
    }
}
