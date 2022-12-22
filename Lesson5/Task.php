<?php

/** Для меня мало времени на то, чтобы освоить  просто синтаксис ООП,
 а тут еще и несколько задач в одном задании. Я не увидела подобного в лекции по ООП.
Например, почему на стр 30 DateTime со скобками, а на 35, 36 строках-без скобочек?
и как вывести результат функции markAsDone(), я тоже не поняла, как и результаты других функций.
При вызове метода setDescription должно обновляться значение свойства dateUpdated. Тоже не понимаю как вывести.
То что я начала делать самостоятельно, совершенно не похоже на то что Вы продемонстрировали в домашке.
И затянулось бы мое выполнение на несколько недель.
Поэтому я просто списала Ваш код */



class Task
{
    private ?string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private Array $comments = [];

    public function __construct(User $user, string $description = null, int $priority = 1)
    {
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
        $this->setDateCreated(new DateTime());
    }

    public function markAsDone(): void
    {
        $this->setdateUpdated(new DateTime);
        $this->setdateDone(new DateTime);
        $this->setIsDone();
    }


    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->isDone;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->setDescription(new DateTime);
        $this->description = $description;
    }

    /**
     * @param DateTime $dateCreated
     */
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @param DateTime $dateUpdated
     */
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @param DateTime $dateDone
     */
    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**

     */
   private function setIsDone(): void
    {
        $this->isDone = true;
    }


    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }


    public function setComment(Comment $comments): void
    {
        $this->comments[] = $comments;
    }

}