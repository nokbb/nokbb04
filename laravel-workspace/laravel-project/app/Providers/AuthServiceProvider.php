<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Folder;
use App\Policies\FolderPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     * ポリシーとモデルを紐づけるプロパティ
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // フォルダーモデルとフィルダーポリシーを紐づける
        Folder::class => FolderPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     * サービスプロバイダが起動される際に呼び出されるメソッド
     * 機能：ポリシーを AuthServiceProvider に登録する
     *
     * @return void
     */
    public function boot()
    {
        // $policies プロパティに登録されたポリシーを有効にする
        $this->registerPolicies();

        //
    }
}
