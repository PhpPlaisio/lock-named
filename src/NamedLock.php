<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Lock;

/**
 * Interface for named locks that are released on commit, rollback or lost connection.
 */
interface NamedLock
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Acquires a named lock.
   *
   * @param int $id The ID of the named lock.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function acquireLock($id);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the named lock.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the name of the named lock.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getName();

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
