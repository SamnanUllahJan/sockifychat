<?php

namespace Samnanullahjan\Sockifychat;

use App\Models\ChatGroup;
use App\Models\ChatMessage;

class SockifyChat
{

    /**
     * The sockifychat library version.
     *
     * @var string
     */
    const VERSION = '15.4.0';

    /**
     * Indicates if sockifychat routes will be registered.
     *
     * @var bool
     */
    public static $registersRoutes = true;

    /**
     * The members model class name.
     *
     * @var string
     */
    public static $memberModel = 'App\\Models\\User';

    /**
     * The members model class name.
     *
     * @var string
     */
    public static $groupModel = ChatGroup::class;

        /**
     * The members model class name.
     *
     * @var string
     */
    public static $messageModel = ChatMessage::class;

    /**
     * Set the member model class name.
     *
     * @param  string  $memberModel
     * @return void
     */
    public static function useMemberModel($memberModel)
    {
        static::$memberModel = $memberModel;
    }

    /**
     * Set the group model class name.
     *
     * @param  string  $groupModel
     * @return void
     */
    public static function useGroupModel($groupModel)
    {
        static::$groupModel = $groupModel;
    }

    /**
     * Set the group model class name.
     *
     * @param  string  $groupModel
     * @return void
     */
    public static function useMessageModel($messageModel)
    {
        static::$messageModel = $messageModel;
    }
}
