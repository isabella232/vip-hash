<?php

namespace automattic\vip\hash;


interface DataModel {


	public function init();

	/**
	 * Save a hash record to the data store
	 *
	 * @param  HashRecord $hash the hash to be saved
	 * @return bool successful?
	 */
	public function saveHash( HashRecord $hash ) : bool;

	/**
	 * @param $file
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function hashFile( $file );


	/**
	 * @param $hash
	 * @param $username
	 *
	 * @return array
	 * @throws \Exception
	 */
	public function getHashStatusByUser( $hash, $username );

	/**
	 * @param $hash
	 *
	 * @throws \Exception
	 * @return array
	 */
	public function getHashStatusAllUsers( $hash );

	public function getNewestSeenHash();

	public function getHashesAfter( $date );

	public function getHashesSeenAfter( $date );

	/**
	 * @param Remote $remote
	 *
	 * @param  Remote $remote the remote data store to add
	 * @return bool
	 */
	public function addRemote( Remote $remote ) : bool;

	/**
	 * @param Remote $remote
	 *
	 * @param  Remote $remote the remote datastore to update
	 * @return bool
	 */
	public function updateRemote( Remote $remote ) : bool;

	/**
	 * remove a remote
	 * @param  Remote $remote [description]
	 * @return bool
	 */
	public function removeRemote( Remote $remote ): bool;

	/**
	 * @return Remote[]
	 * @throws \Exception
	 */
	public function getRemotes();

	/**
	 * @param $name
	 *
	 * @throws \Exception
	 * @return bool|Remote
	 */
	public function getRemote( $name );

	/**
	 * Returns a config object
	 * @return Config the config object
	 */
	public function config() : config\Config;

	/**
	 * Returns a Hash Query object
	 * @return HashQuery a new query for fetching hashes
	 */
	public function newQuery() : HashQuery;
}
