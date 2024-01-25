<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Folder;
use Illuminate\Auth\Access\HandlesAuthorization;

class FolderPolicy
{
    use HandlesAuthorization;

    /**
     * フォルダの閲覧権限をチェックするポリシークラス
     * 機能：認可処理を真偽値で返す 認可処理を定義する
     * 用途：ユーザーとフォルダが紐づいているときのみ閲覧を許可する
     * 
     * @param User $user
     * @param Folder $folder
     * @return bool
     */
    public function view(User $user, Folder $folder)
    {
        // ユーザーとフォルダを比較して真偽値を返す
        return $user->id === $folder->user_id;
    }
}
