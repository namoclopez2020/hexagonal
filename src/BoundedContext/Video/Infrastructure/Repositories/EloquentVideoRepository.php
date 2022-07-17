<?php

declare(strict_types=1);

namespace Src\BoundedContext\Video\Infrastructure\Repositories;

use App\Models\Video as EloquentVideoModel;
use Src\BoundedContext\Video\Domain\Contracts\VideoRepositoryContract;

final class EloquentVideoRepository implements VideoRepositoryContract
{
    private $eloquentVideoRepository;

    public function __construct()
    {
        $this->eloquentVideoRepository = new EloquentVideoModel;
    }

    public function find($id)
    {
        $user = $this->eloquentVideoRepository->findOrFail($id);

        // Return Domain User model
        return $user;
        // return new User(
        //     new UserName($user->name),
        //     new UserEmail($user->email),
        //     new UserEmailVerifiedDate($user->email_verified_at),
        //     new UserPassword($user->password),
        //     new UserRememberToken($user->remember_token)
        // );
    }

    public function save($user): void
    {
        $newUser = $this->eloquentUserModel;

        $data = [
            'name'              => $user->name()->value(),
            'email'             => $user->email()->value(),
            'email_verified_at' => $user->emailVerifiedDate()->value(),
            'password'          => $user->password()->value(),
            'remember_token'    => $user->rememberToken()->value(),
        ];

        $newUser->create($data);
    }

    public function update($id,$user): void
    {
        // $userToUpdate = $this->eloquentUserModel;

        // $data = [
        //     'name'  => $user->name()->value(),
        //     'email' => $user->email()->value(),
        // ];

        // $userToUpdate
        //     ->findOrFail($id->value())
        //     ->update($data);
    }

    public function delete($id): void
    {
        $this->eloquentUserModel
            ->findOrFail($id->value())
            ->delete();
    }
}
