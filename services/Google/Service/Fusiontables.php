<?php

defined( 'ABSPATH' ) || exit; 
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Fusiontables (v1).
 *
 * <p>
 * API for working with Fusion Tables data.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/fusiontables" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Fusiontables extends Google_Service
{
  /** Manage your Fusion Tables. */
  const FUSIONTABLES = "https://www.googleapis.com/auth/fusiontables";
  /** View your Fusion Tables. */
  const FUSIONTABLES_READONLY = "https://www.googleapis.com/auth/fusiontables.readonly";

  public $column;
  public $query;
  public $style;
  public $table;
  public $template;
  

  /**
   * Constructs the internal representation of the Fusiontables service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $this->column = new Google_Service_Fusiontables_Column_Resource(
        $this,
        $this->serviceName,
        'column',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/columns',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/columns',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/columns/{columnId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'columnId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->query = new Google_Service_Fusiontables_Query_Resource(
        $this,
        $this->serviceName,
        'query',
        array(
          'methods' => array(
            'sql' => array(
              'path' => 'query',
              'httpMethod' => 'POST',
              'parameters' => array(
                'sql' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'typed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'hdrs' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'sqlGet' => array(
              'path' => 'query',
              'httpMethod' => 'GET',
              'parameters' => array(
                'sql' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'typed' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'hdrs' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->style = new Google_Service_Fusiontables_Style_Resource(
        $this,
        $this->serviceName,
        'style',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/styles',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/styles',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/styles/{styleId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'styleId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->table = new Google_Service_Fusiontables_Table_Resource(
        $this,
        $this->serviceName,
        'table',
        array(
          'methods' => array(
            'copy' => array(
              'path' => 'tables/{tableId}/copy',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'copyPresentation' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'delete' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'importRows' => array(
              'path' => 'tables/{tableId}/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startLine' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'isStrict' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'encoding' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'delimiter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endLine' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'importTable' => array(
              'path' => 'tables/import',
              'httpMethod' => 'POST',
              'parameters' => array(
                'name' => array(
                  'location' => 'query',
                  'type' => 'string',
                  'required' => true,
                ),
                'delimiter' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'encoding' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'tables',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),'list' => array(
              'path' => 'tables',
              'httpMethod' => 'GET',
              'parameters' => array(
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replaceViewDefinition' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'replaceViewDefinition' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->template = new Google_Service_Fusiontables_Template_Resource(
        $this,
        $this->serviceName,
        'template',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'tables/{tableId}/templates',
              'httpMethod' => 'POST',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'tables/{tableId}/templates',
              'httpMethod' => 'GET',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
              ),
            ),'patch' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'tables/{tableId}/templates/{templateId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'tableId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'templateId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "column" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $column = $fusiontablesService->column;
 *  </code>
 */
class Google_Service_Fusiontables_Column_Resource extends Google_Service_Resource
{

  /**
   * Deletes the column. (column.delete)
   *
   * @param string $tableId
   * Table from which the column is being deleted.
   * @param string $columnId
   * Name or identifier for the column being deleted.
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a specific column by its id. (column.get)
   *
   * @param string $tableId
   * Table to which the column belongs.
   * @param string $columnId
   * Name or identifier for the column that is being requested.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function get($tableId, $columnId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   * Adds a new column to the table. (column.insert)
   *
   * @param string $tableId
   * Table for which a new column is being added.
   * @param Google_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function insert($tableId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   * Retrieves a list of columns. (column.listColumn)
   *
   * @param string $tableId
   * Table whose columns are being listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of columns to return. Optional. Default is 5.
   * @return Google_Service_Fusiontables_ColumnList
   */
  public function listColumn($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_ColumnList");
  }
  /**
   * Updates the name or type of an existing column. This method supports patch
   * semantics. (column.patch)
   *
   * @param string $tableId
   * Table for which the column is being updated.
   * @param string $columnId
   * Name or identifier for the column that is being updated.
   * @param Google_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function patch($tableId, $columnId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Column");
  }
  /**
   * Updates the name or type of an existing column. (column.update)
   *
   * @param string $tableId
   * Table for which the column is being updated.
   * @param string $columnId
   * Name or identifier for the column that is being updated.
   * @param Google_Column $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Column
   */
  public function update($tableId, $columnId, Google_Service_Fusiontables_Column $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Column");
  }
}

/**
 * The "query" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $query = $fusiontablesService->query;
 *  </code>
 */
class Google_Service_Fusiontables_Query_Resource extends Google_Service_Resource
{

  /**
   * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE/CREATE statement.
   * (query.sql)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE/CREATE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return Google_Service_Fusiontables_Sqlresponse
   */
  public function sql($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sql', array($params), "Google_Service_Fusiontables_Sqlresponse");
  }
  /**
   * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return Google_Service_Fusiontables_Sqlresponse
   */
  public function sqlGet($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sqlGet', array($params), "Google_Service_Fusiontables_Sqlresponse");
  }
}

/**
 * The "style" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $style = $fusiontablesService->style;
 *  </code>
 */
class Google_Service_Fusiontables_Style_Resource extends Google_Service_Resource
{

  /**
   * Deletes a style. (style.delete)
   *
   * @param string $tableId
   * Table from which the style is being deleted
   * @param int $styleId
   * Identifier (within a table) for the style being deleted
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $styleId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a specific style. (style.get)
   *
   * @param string $tableId
   * Table to which the requested style belongs
   * @param int $styleId
   * Identifier (integer) for a specific style in a table
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function get($tableId, $styleId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   * Adds a new style for the table. (style.insert)
   *
   * @param string $tableId
   * Table for which a new style is being added
   * @param Google_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function insert($tableId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   * Retrieves a list of styles. (style.listStyle)
   *
   * @param string $tableId
   * Table whose styles are being listed
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of styles to return. Optional. Default is 5.
   * @return Google_Service_Fusiontables_StyleSettingList
   */
  public function listStyle($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_StyleSettingList");
  }
  /**
   * Updates an existing style. This method supports patch semantics.
   * (style.patch)
   *
   * @param string $tableId
   * Table whose style is being updated.
   * @param int $styleId
   * Identifier (within a table) for the style being updated.
   * @param Google_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function patch($tableId, $styleId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
  /**
   * Updates an existing style. (style.update)
   *
   * @param string $tableId
   * Table whose style is being updated.
   * @param int $styleId
   * Identifier (within a table) for the style being updated.
   * @param Google_StyleSetting $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_StyleSetting
   */
  public function update($tableId, $styleId, Google_Service_Fusiontables_StyleSetting $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_StyleSetting");
  }
}

/**
 * The "table" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $table = $fusiontablesService->table;
 *  </code>
 */
class Google_Service_Fusiontables_Table_Resource extends Google_Service_Resource
{

  /**
   * Copies a table. (table.copy)
   *
   * @param string $tableId
   * ID of the table that is being copied.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool copyPresentation
   * Whether to also copy tabs, styles, and templates. Default is false.
   * @return Google_Service_Fusiontables_Table
   */
  public function copy($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('copy', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   * Deletes a table. (table.delete)
   *
   * @param string $tableId
   * ID of the table that is being deleted.
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a specific table by its id. (table.get)
   *
   * @param string $tableId
   * Identifier(ID) for the table being requested.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Table
   */
  public function get($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   * Import more rows into a table. (table.importRows)
   *
   * @param string $tableId
   * The table into which new rows are being imported.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int startLine
   * The index of the first line from which to start importing, inclusive. Default is 0.
   * @opt_param bool isStrict
   * Whether the CSV must have the same number of values for each row. If false, rows with fewer
    * values will be padded with empty values. Default is true.
   * @opt_param string encoding
   * The encoding of the content. Default is UTF-8. Use 'auto-detect' if you are unsure of the
    * encoding.
   * @opt_param string delimiter
   * The delimiter used to separate cell values. This can only consist of a single character. Default
    * is ','.
   * @opt_param int endLine
   * The index of the last line from which to start importing, exclusive. Thus, the number of
    * imported lines is endLine - startLine. If this parameter is not provided, the file will be
    * imported until the last line of the file. If endLine is negative, then the imported content will
    * exclude the last endLine lines. That is, if endline is negative, no line will be imported whose
    * index is greater than N + endLine where N is the number of lines in the file, and the number of
    * imported lines will be N + endLine - startLine.
   * @return Google_Service_Fusiontables_Import
   */
  public function importRows($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('importRows', array($params), "Google_Service_Fusiontables_Import");
  }
  /**
   * Import a new table. (table.importTable)
   *
   * @param string $name
   * The name to be assigned to the new table.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string delimiter
   * The delimiter used to separate cell values. This can only consist of a single character. Default
    * is ','.
   * @opt_param string encoding
   * The encoding of the content. Default is UTF-8. Use 'auto-detect' if you are unsure of the
    * encoding.
   * @return Google_Service_Fusiontables_Table
   */
  public function importTable($name, $optParams = array())
  {
    $params = array('name' => $name);
    $params = array_merge($params, $optParams);
    return $this->call('importTable', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   * Creates a new table. (table.insert)
   *
   * @param Google_Table $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Table
   */
  public function insert(Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   * Retrieves a list of tables a user owns. (table.listTable)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which result page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of styles to return. Optional. Default is 5.
   * @return Google_Service_Fusiontables_TableList
   */
  public function listTable($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_TableList");
  }
  /**
   * Updates an existing table. Unless explicitly requested, only the name,
   * description, and attribution will be updated. This method supports patch
   * semantics. (table.patch)
   *
   * @param string $tableId
   * ID of the table that is being updated.
   * @param Google_Table $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool replaceViewDefinition
   * Should the view definition also be updated? The specified view definition replaces the existing
    * one. Only a view can be updated with a new definition.
   * @return Google_Service_Fusiontables_Table
   */
  public function patch($tableId, Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Table");
  }
  /**
   * Updates an existing table. Unless explicitly requested, only the name,
   * description, and attribution will be updated. (table.update)
   *
   * @param string $tableId
   * ID of the table that is being updated.
   * @param Google_Table $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool replaceViewDefinition
   * Should the view definition also be updated? The specified view definition replaces the existing
    * one. Only a view can be updated with a new definition.
   * @return Google_Service_Fusiontables_Table
   */
  public function update($tableId, Google_Service_Fusiontables_Table $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Table");
  }
}

/**
 * The "template" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $template = $fusiontablesService->template;
 *  </code>
 */
class Google_Service_Fusiontables_Template_Resource extends Google_Service_Resource
{

  /**
   * Deletes a template (template.delete)
   *
   * @param string $tableId
   * Table from which the template is being deleted
   * @param int $templateId
   * Identifier for the template which is being deleted
   * @param array $optParams Optional parameters.
   */
  public function delete($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves a specific template by its id (template.get)
   *
   * @param string $tableId
   * Table to which the template belongs
   * @param int $templateId
   * Identifier for the template that is being requested
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function get($tableId, $templateId, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   * Creates a new template for the table. (template.insert)
   *
   * @param string $tableId
   * Table for which a new template is being created
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function insert($tableId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   * Retrieves a list of templates. (template.listTemplate)
   *
   * @param string $tableId
   * Identifier for the table whose templates are being requested
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Continuation token specifying which results page to return. Optional.
   * @opt_param string maxResults
   * Maximum number of templates to return. Optional. Default is 5.
   * @return Google_Service_Fusiontables_TemplateList
   */
  public function listTemplate($tableId, $optParams = array())
  {
    $params = array('tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Fusiontables_TemplateList");
  }
  /**
   * Updates an existing template. This method supports patch semantics.
   * (template.patch)
   *
   * @param string $tableId
   * Table to which the updated template belongs
   * @param int $templateId
   * Identifier for the template that is being updated
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function patch($tableId, $templateId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Fusiontables_Template");
  }
  /**
   * Updates an existing template (template.update)
   *
   * @param string $tableId
   * Table to which the updated template belongs
   * @param int $templateId
   * Identifier for the template that is being updated
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Fusiontables_Template
   */
  public function update($tableId, $templateId, Google_Service_Fusiontables_Template $postBody, $optParams = array())
  {
    $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Fusiontables_Template");
  }
}




class Google_Service_Fusiontables_Bucket extends Google_Model
{
  public $color;
  public $icon;
  public $max;
  public $min;
  public $opacity;
  public $weight;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setIcon($icon)
  {
    $this->icon = $icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getMin()
  {
    return $this->min;
  }

  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }

  public function getOpacity()
  {
    return $this->opacity;
  }

  public function setWeight($weight)
  {
    $this->weight = $weight;
  }

  public function getWeight()
  {
    return $this->weight;
  }
}

class Google_Service_Fusiontables_Column extends Google_Model
{
  protected $baseColumnType = 'Google_Service_Fusiontables_ColumnBaseColumn';
  protected $baseColumnDataType = '';
  public $columnId;
  public $kind;
  public $name;
  public $type;

  public function setBaseColumn(Google_Service_Fusiontables_ColumnBaseColumn $baseColumn)
  {
    $this->baseColumn = $baseColumn;
  }

  public function getBaseColumn()
  {
    return $this->baseColumn;
  }

  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }

  public function getColumnId()
  {
    return $this->columnId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Fusiontables_ColumnBaseColumn extends Google_Model
{
  public $columnId;
  public $tableIndex;

  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }

  public function getColumnId()
  {
    return $this->columnId;
  }

  public function setTableIndex($tableIndex)
  {
    $this->tableIndex = $tableIndex;
  }

  public function getTableIndex()
  {
    return $this->tableIndex;
  }
}

class Google_Service_Fusiontables_ColumnList extends Google_Collection
{
  protected $itemsType = 'Google_Service_Fusiontables_Column';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $totalItems;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class Google_Service_Fusiontables_Geometry extends Google_Collection
{
  public $geometries;
  public $geometry;
  public $type;

  public function setGeometries($geometries)
  {
    $this->geometries = $geometries;
  }

  public function getGeometries()
  {
    return $this->geometries;
  }

  public function setGeometry($geometry)
  {
    $this->geometry = $geometry;
  }

  public function getGeometry()
  {
    return $this->geometry;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Fusiontables_Import extends Google_Model
{
  public $kind;
  public $numRowsReceived;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumRowsReceived($numRowsReceived)
  {
    $this->numRowsReceived = $numRowsReceived;
  }

  public function getNumRowsReceived()
  {
    return $this->numRowsReceived;
  }
}

class Google_Service_Fusiontables_Line extends Google_Collection
{
  public $coordinates;
  public $type;

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }

  public function getCoordinates()
  {
    return $this->coordinates;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Fusiontables_LineStyle extends Google_Model
{
  public $strokeColor;
  protected $strokeColorStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeColorStylerDataType = '';
  public $strokeOpacity;
  public $strokeWeight;
  protected $strokeWeightStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeWeightStylerDataType = '';

  public function setStrokeColor($strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }

  public function getStrokeColor()
  {
    return $this->strokeColor;
  }

  public function setStrokeColorStyler(Google_Service_Fusiontables_StyleFunction $strokeColorStyler)
  {
    $this->strokeColorStyler = $strokeColorStyler;
  }

  public function getStrokeColorStyler()
  {
    return $this->strokeColorStyler;
  }

  public function setStrokeOpacity($strokeOpacity)
  {
    $this->strokeOpacity = $strokeOpacity;
  }

  public function getStrokeOpacity()
  {
    return $this->strokeOpacity;
  }

  public function setStrokeWeight($strokeWeight)
  {
    $this->strokeWeight = $strokeWeight;
  }

  public function getStrokeWeight()
  {
    return $this->strokeWeight;
  }

  public function setStrokeWeightStyler(Google_Service_Fusiontables_StyleFunction $strokeWeightStyler)
  {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }

  public function getStrokeWeightStyler()
  {
    return $this->strokeWeightStyler;
  }
}

class Google_Service_Fusiontables_Point extends Google_Collection
{
  public $coordinates;
  public $type;

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }

  public function getCoordinates()
  {
    return $this->coordinates;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Fusiontables_PointStyle extends Google_Model
{
  public $iconName;
  protected $iconStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $iconStylerDataType = '';

  public function setIconName($iconName)
  {
    $this->iconName = $iconName;
  }

  public function getIconName()
  {
    return $this->iconName;
  }

  public function setIconStyler(Google_Service_Fusiontables_StyleFunction $iconStyler)
  {
    $this->iconStyler = $iconStyler;
  }

  public function getIconStyler()
  {
    return $this->iconStyler;
  }
}

class Google_Service_Fusiontables_Polygon extends Google_Collection
{
  public $coordinates;
  public $type;

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }

  public function getCoordinates()
  {
    return $this->coordinates;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}

class Google_Service_Fusiontables_PolygonStyle extends Google_Model
{
  public $fillColor;
  protected $fillColorStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $fillColorStylerDataType = '';
  public $fillOpacity;
  public $strokeColor;
  protected $strokeColorStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeColorStylerDataType = '';
  public $strokeOpacity;
  public $strokeWeight;
  protected $strokeWeightStylerType = 'Google_Service_Fusiontables_StyleFunction';
  protected $strokeWeightStylerDataType = '';

  public function setFillColor($fillColor)
  {
    $this->fillColor = $fillColor;
  }

  public function getFillColor()
  {
    return $this->fillColor;
  }

  public function setFillColorStyler(Google_Service_Fusiontables_StyleFunction $fillColorStyler)
  {
    $this->fillColorStyler = $fillColorStyler;
  }

  public function getFillColorStyler()
  {
    return $this->fillColorStyler;
  }

  public function setFillOpacity($fillOpacity)
  {
    $this->fillOpacity = $fillOpacity;
  }

  public function getFillOpacity()
  {
    return $this->fillOpacity;
  }

  public function setStrokeColor($strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }

  public function getStrokeColor()
  {
    return $this->strokeColor;
  }

  public function setStrokeColorStyler(Google_Service_Fusiontables_StyleFunction $strokeColorStyler)
  {
    $this->strokeColorStyler = $strokeColorStyler;
  }

  public function getStrokeColorStyler()
  {
    return $this->strokeColorStyler;
  }

  public function setStrokeOpacity($strokeOpacity)
  {
    $this->strokeOpacity = $strokeOpacity;
  }

  public function getStrokeOpacity()
  {
    return $this->strokeOpacity;
  }

  public function setStrokeWeight($strokeWeight)
  {
    $this->strokeWeight = $strokeWeight;
  }

  public function getStrokeWeight()
  {
    return $this->strokeWeight;
  }

  public function setStrokeWeightStyler(Google_Service_Fusiontables_StyleFunction $strokeWeightStyler)
  {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }

  public function getStrokeWeightStyler()
  {
    return $this->strokeWeightStyler;
  }
}

class Google_Service_Fusiontables_Sqlresponse extends Google_Collection
{
  public $columns;
  public $kind;
  public $rows;

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }
}

class Google_Service_Fusiontables_StyleFunction extends Google_Collection
{
  protected $bucketsType = 'Google_Service_Fusiontables_Bucket';
  protected $bucketsDataType = 'array';
  public $columnName;
  protected $gradientType = 'Google_Service_Fusiontables_StyleFunctionGradient';
  protected $gradientDataType = '';
  public $kind;

  public function setBuckets($buckets)
  {
    $this->buckets = $buckets;
  }

  public function getBuckets()
  {
    return $this->buckets;
  }

  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }

  public function getColumnName()
  {
    return $this->columnName;
  }

  public function setGradient(Google_Service_Fusiontables_StyleFunctionGradient $gradient)
  {
    $this->gradient = $gradient;
  }

  public function getGradient()
  {
    return $this->gradient;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}

class Google_Service_Fusiontables_StyleFunctionGradient extends Google_Collection
{
  protected $colorsType = 'Google_Service_Fusiontables_StyleFunctionGradientColors';
  protected $colorsDataType = 'array';
  public $max;
  public $min;

  public function setColors($colors)
  {
    $this->colors = $colors;
  }

  public function getColors()
  {
    return $this->colors;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getMin()
  {
    return $this->min;
  }
}

class Google_Service_Fusiontables_StyleFunctionGradientColors extends Google_Model
{
  public $color;
  public $opacity;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }

  public function getOpacity()
  {
    return $this->opacity;
  }
}

class Google_Service_Fusiontables_StyleSetting extends Google_Model
{
  public $kind;
  protected $markerOptionsType = 'Google_Service_Fusiontables_PointStyle';
  protected $markerOptionsDataType = '';
  public $name;
  protected $polygonOptionsType = 'Google_Service_Fusiontables_PolygonStyle';
  protected $polygonOptionsDataType = '';
  protected $polylineOptionsType = 'Google_Service_Fusiontables_LineStyle';
  protected $polylineOptionsDataType = '';
  public $styleId;
  public $tableId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMarkerOptions(Google_Service_Fusiontables_PointStyle $markerOptions)
  {
    $this->markerOptions = $markerOptions;
  }

  public function getMarkerOptions()
  {
    return $this->markerOptions;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPolygonOptions(Google_Service_Fusiontables_PolygonStyle $polygonOptions)
  {
    $this->polygonOptions = $polygonOptions;
  }

  public function getPolygonOptions()
  {
    return $this->polygonOptions;
  }

  public function setPolylineOptions(Google_Service_Fusiontables_LineStyle $polylineOptions)
  {
    $this->polylineOptions = $polylineOptions;
  }

  public function getPolylineOptions()
  {
    return $this->polylineOptions;
  }

  public function setStyleId($styleId)
  {
    $this->styleId = $styleId;
  }

  public function getStyleId()
  {
    return $this->styleId;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }
}

class Google_Service_Fusiontables_StyleSettingList extends Google_Collection
{
  protected $itemsType = 'Google_Service_Fusiontables_StyleSetting';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $totalItems;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}

class Google_Service_Fusiontables_Table extends Google_Collection
{
  public $attribution;
  public $attributionLink;
  public $baseTableIds;
  protected $columnsType = 'Google_Service_Fusiontables_Column';
  protected $columnsDataType = 'array';
  public $description;
  public $isExportable;
  public $kind;
  public $name;
  public $sql;
  public $tableId;

  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }

  public function getAttribution()
  {
    return $this->attribution;
  }

  public function setAttributionLink($attributionLink)
  {
    $this->attributionLink = $attributionLink;
  }

  public function getAttributionLink()
  {
    return $this->attributionLink;
  }

  public function setBaseTableIds($baseTableIds)
  {
    $this->baseTableIds = $baseTableIds;
  }

  public function getBaseTableIds()
  {
    return $this->baseTableIds;
  }

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setIsExportable($isExportable)
  {
    $this->isExportable = $isExportable;
  }

  public function getIsExportable()
  {
    return $this->isExportable;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSql($sql)
  {
    $this->sql = $sql;
  }

  public function getSql()
  {
    return $this->sql;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }
}

class Google_Service_Fusiontables_TableList extends Google_Collection
{
  protected $itemsType = 'Google_Service_Fusiontables_Table';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Google_Service_Fusiontables_Template extends Google_Collection
{
  public $automaticColumnNames;
  public $body;
  public $kind;
  public $name;
  public $tableId;
  public $templateId;

  public function setAutomaticColumnNames($automaticColumnNames)
  {
    $this->automaticColumnNames = $automaticColumnNames;
  }

  public function getAutomaticColumnNames()
  {
    return $this->automaticColumnNames;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }

  public function setTemplateId($templateId)
  {
    $this->templateId = $templateId;
  }

  public function getTemplateId()
  {
    return $this->templateId;
  }
}

class Google_Service_Fusiontables_TemplateList extends Google_Collection
{
  protected $itemsType = 'Google_Service_Fusiontables_Template';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $totalItems;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
