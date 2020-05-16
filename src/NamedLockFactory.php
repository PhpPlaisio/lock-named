<?php
declare(strict_types=1);

namespace Plaisio\Lock;

/**
 * Interface for factories for creating named locks.
 */
interface NamedLockFactory
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Acquires a named lock and returns the object holding the lock.
   *
   * @param int $id The ID of the named lock.
   *
   * @return NamedLock
   */
  public function create(int $id): NamedLock;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
