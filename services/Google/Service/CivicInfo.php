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
 * Service definition for CivicInfo (us_v1).
 *
 * <p>
 * An API for accessing civic information.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/civic-information" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CivicInfo extends Google_Service
{


  public $divisions;
  public $elections;
  public $representatives;
  

  /**
   * Constructs the internal representation of the CivicInfo service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'civicinfo/us_v1/';
    $this->version = 'us_v1';
    $this->serviceName = 'civicinfo';

    $this->divisions = new Google_Service_CivicInfo_Divisions_Resource(
        $this,
        $this->serviceName,
        'divisions',
        array(
          'methods' => array(
            'search' => array(
              'path' => 'representatives/division_search',
              'httpMethod' => 'GET',
              'parameters' => array(
                'query' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->elections = new Google_Service_CivicInfo_Elections_Resource(
        $this,
        $this->serviceName,
        'elections',
        array(
          'methods' => array(
            'electionQuery' => array(
              'path' => 'elections',
              'httpMethod' => 'GET',
              'parameters' => array(),
            ),'voterInfoQuery' => array(
              'path' => 'voterinfo/{electionId}/lookup',
              'httpMethod' => 'POST',
              'parameters' => array(
                'electionId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'officialOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
    $this->representatives = new Google_Service_CivicInfo_Representatives_Resource(
        $this,
        $this->serviceName,
        'representatives',
        array(
          'methods' => array(
            'representativeInfoQuery' => array(
              'path' => 'representatives/lookup',
              'httpMethod' => 'POST',
              'parameters' => array(
                'ocdId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'includeOffices' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "divisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $divisions = $civicinfoService->divisions;
 *  </code>
 */
class Google_Service_CivicInfo_Divisions_Resource extends Google_Service_Resource
{

  /**
   * Searches for political divisions by their natural name or OCD ID.
   * (divisions.search)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string query
   * The search query. Queries can cover any parts of a OCD ID or a human readable division name. All
    * words given in the query are treated as required patterns. In addition to that, most query
    * operators of the Apache Lucene library are supported. See
    * http://lucene.apache.org/core/2_9_4/queryparsersyntax.html
   * @return Google_Service_CivicInfo_DivisionSearchResponse
   */
  public function search($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), "Google_Service_CivicInfo_DivisionSearchResponse");
  }
}

/**
 * The "elections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $elections = $civicinfoService->elections;
 *  </code>
 */
class Google_Service_CivicInfo_Elections_Resource extends Google_Service_Resource
{

  /**
   * List of available elections to query. (elections.electionQuery)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_CivicInfo_ElectionsQueryResponse
   */
  public function electionQuery($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('electionQuery', array($params), "Google_Service_CivicInfo_ElectionsQueryResponse");
  }
  /**
   * Looks up information relevant to a voter based on the voter's registered
   * address. (elections.voterInfoQuery)
   *
   * @param string $electionId
   * The unique ID of the election to look up. A list of election IDs can be obtained at
    * https://www.googleapis.com/civicinfo/{version}/elections
   * @param Google_VoterInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool officialOnly
   * If set to true, only data from official state sources will be returned.
   * @return Google_Service_CivicInfo_VoterInfoResponse
   */
  public function voterInfoQuery($electionId, Google_Service_CivicInfo_VoterInfoRequest $postBody, $optParams = array())
  {
    $params = array('electionId' => $electionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('voterInfoQuery', array($params), "Google_Service_CivicInfo_VoterInfoResponse");
  }
}

/**
 * The "representatives" collection of methods.
 * Typical usage is:
 *  <code>
 *   $civicinfoService = new Google_Service_CivicInfo(...);
 *   $representatives = $civicinfoService->representatives;
 *  </code>
 */
class Google_Service_CivicInfo_Representatives_Resource extends Google_Service_Resource
{

  /**
   * Looks up political geography and (optionally) representative information
   * based on an address. (representatives.representativeInfoQuery)
   *
   * @param Google_RepresentativeInfoRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ocdId
   * The division to look up. May only be specified if the address field is not given in the request
    * body.
   * @opt_param bool includeOffices
   * Whether to return information about offices and officials. If false, only the top-level district
    * information will be returned.
   * @return Google_Service_CivicInfo_RepresentativeInfoResponse
   */
  public function representativeInfoQuery(Google_Service_CivicInfo_RepresentativeInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('representativeInfoQuery', array($params), "Google_Service_CivicInfo_RepresentativeInfoResponse");
  }
}




class Google_Service_CivicInfo_AdministrationRegion extends Google_Collection
{
  protected $electionAdministrationBodyType = 'Google_Service_CivicInfo_AdministrativeBody';
  protected $electionAdministrationBodyDataType = '';
  public $id;
  protected $localJurisdictionType = 'Google_Service_CivicInfo_AdministrationRegion';
  protected $localJurisdictionDataType = '';
  public $name;
  protected $sourcesType = 'Google_Service_CivicInfo_Source';
  protected $sourcesDataType = 'array';

  public function setElectionAdministrationBody(Google_Service_CivicInfo_AdministrativeBody $electionAdministrationBody)
  {
    $this->electionAdministrationBody = $electionAdministrationBody;
  }

  public function getElectionAdministrationBody()
  {
    return $this->electionAdministrationBody;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLocalJurisdiction(Google_Service_CivicInfo_AdministrationRegion $localJurisdiction)
  {
    $this->localJurisdiction = $localJurisdiction;
  }

  public function getLocalJurisdiction()
  {
    return $this->localJurisdiction;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }
}

class Google_Service_CivicInfo_AdministrativeBody extends Google_Collection
{
  public $absenteeVotingInfoUrl;
  public $ballotInfoUrl;
  protected $correspondenceAddressType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $correspondenceAddressDataType = '';
  public $electionInfoUrl;
  protected $electionOfficialsType = 'Google_Service_CivicInfo_ElectionOfficial';
  protected $electionOfficialsDataType = 'array';
  public $electionRegistrationConfirmationUrl;
  public $electionRegistrationUrl;
  public $electionRulesUrl;
  public $hoursOfOperation;
  public $name;
  protected $physicalAddressType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $physicalAddressDataType = '';
  public $voterServices;
  public $votingLocationFinderUrl;

  public function setAbsenteeVotingInfoUrl($absenteeVotingInfoUrl)
  {
    $this->absenteeVotingInfoUrl = $absenteeVotingInfoUrl;
  }

  public function getAbsenteeVotingInfoUrl()
  {
    return $this->absenteeVotingInfoUrl;
  }

  public function setBallotInfoUrl($ballotInfoUrl)
  {
    $this->ballotInfoUrl = $ballotInfoUrl;
  }

  public function getBallotInfoUrl()
  {
    return $this->ballotInfoUrl;
  }

  public function setCorrespondenceAddress(Google_Service_CivicInfo_SimpleAddressType $correspondenceAddress)
  {
    $this->correspondenceAddress = $correspondenceAddress;
  }

  public function getCorrespondenceAddress()
  {
    return $this->correspondenceAddress;
  }

  public function setElectionInfoUrl($electionInfoUrl)
  {
    $this->electionInfoUrl = $electionInfoUrl;
  }

  public function getElectionInfoUrl()
  {
    return $this->electionInfoUrl;
  }

  public function setElectionOfficials($electionOfficials)
  {
    $this->electionOfficials = $electionOfficials;
  }

  public function getElectionOfficials()
  {
    return $this->electionOfficials;
  }

  public function setElectionRegistrationConfirmationUrl($electionRegistrationConfirmationUrl)
  {
    $this->electionRegistrationConfirmationUrl = $electionRegistrationConfirmationUrl;
  }

  public function getElectionRegistrationConfirmationUrl()
  {
    return $this->electionRegistrationConfirmationUrl;
  }

  public function setElectionRegistrationUrl($electionRegistrationUrl)
  {
    $this->electionRegistrationUrl = $electionRegistrationUrl;
  }

  public function getElectionRegistrationUrl()
  {
    return $this->electionRegistrationUrl;
  }

  public function setElectionRulesUrl($electionRulesUrl)
  {
    $this->electionRulesUrl = $electionRulesUrl;
  }

  public function getElectionRulesUrl()
  {
    return $this->electionRulesUrl;
  }

  public function setHoursOfOperation($hoursOfOperation)
  {
    $this->hoursOfOperation = $hoursOfOperation;
  }

  public function getHoursOfOperation()
  {
    return $this->hoursOfOperation;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPhysicalAddress(Google_Service_CivicInfo_SimpleAddressType $physicalAddress)
  {
    $this->physicalAddress = $physicalAddress;
  }

  public function getPhysicalAddress()
  {
    return $this->physicalAddress;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }

  public function setVotingLocationFinderUrl($votingLocationFinderUrl)
  {
    $this->votingLocationFinderUrl = $votingLocationFinderUrl;
  }

  public function getVotingLocationFinderUrl()
  {
    return $this->votingLocationFinderUrl;
  }
}

class Google_Service_CivicInfo_Candidate extends Google_Collection
{
  public $candidateUrl;
  protected $channelsType = 'Google_Service_CivicInfo_Channel';
  protected $channelsDataType = 'array';
  public $email;
  public $name;
  public $orderOnBallot;
  public $party;
  public $phone;
  public $photoUrl;

  public function setCandidateUrl($candidateUrl)
  {
    $this->candidateUrl = $candidateUrl;
  }

  public function getCandidateUrl()
  {
    return $this->candidateUrl;
  }

  public function setChannels($channels)
  {
    $this->channels = $channels;
  }

  public function getChannels()
  {
    return $this->channels;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOrderOnBallot($orderOnBallot)
  {
    $this->orderOnBallot = $orderOnBallot;
  }

  public function getOrderOnBallot()
  {
    return $this->orderOnBallot;
  }

  public function setParty($party)
  {
    $this->party = $party;
  }

  public function getParty()
  {
    return $this->party;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }
}

class Google_Service_CivicInfo_Channel extends Google_Model
{
  public $id;
  public $type;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
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

class Google_Service_CivicInfo_Contest extends Google_Collection
{
  public $ballotPlacement;
  protected $candidatesType = 'Google_Service_CivicInfo_Candidate';
  protected $candidatesDataType = 'array';
  protected $districtType = 'Google_Service_CivicInfo_ElectoralDistrict';
  protected $districtDataType = '';
  public $electorateSpecifications;
  public $id;
  public $level;
  public $numberElected;
  public $numberVotingFor;
  public $office;
  public $primaryParty;
  public $referendumSubtitle;
  public $referendumTitle;
  public $referendumUrl;
  protected $sourcesType = 'Google_Service_CivicInfo_Source';
  protected $sourcesDataType = 'array';
  public $special;
  public $type;

  public function setBallotPlacement($ballotPlacement)
  {
    $this->ballotPlacement = $ballotPlacement;
  }

  public function getBallotPlacement()
  {
    return $this->ballotPlacement;
  }

  public function setCandidates($candidates)
  {
    $this->candidates = $candidates;
  }

  public function getCandidates()
  {
    return $this->candidates;
  }

  public function setDistrict(Google_Service_CivicInfo_ElectoralDistrict $district)
  {
    $this->district = $district;
  }

  public function getDistrict()
  {
    return $this->district;
  }

  public function setElectorateSpecifications($electorateSpecifications)
  {
    $this->electorateSpecifications = $electorateSpecifications;
  }

  public function getElectorateSpecifications()
  {
    return $this->electorateSpecifications;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setNumberElected($numberElected)
  {
    $this->numberElected = $numberElected;
  }

  public function getNumberElected()
  {
    return $this->numberElected;
  }

  public function setNumberVotingFor($numberVotingFor)
  {
    $this->numberVotingFor = $numberVotingFor;
  }

  public function getNumberVotingFor()
  {
    return $this->numberVotingFor;
  }

  public function setOffice($office)
  {
    $this->office = $office;
  }

  public function getOffice()
  {
    return $this->office;
  }

  public function setPrimaryParty($primaryParty)
  {
    $this->primaryParty = $primaryParty;
  }

  public function getPrimaryParty()
  {
    return $this->primaryParty;
  }

  public function setReferendumSubtitle($referendumSubtitle)
  {
    $this->referendumSubtitle = $referendumSubtitle;
  }

  public function getReferendumSubtitle()
  {
    return $this->referendumSubtitle;
  }

  public function setReferendumTitle($referendumTitle)
  {
    $this->referendumTitle = $referendumTitle;
  }

  public function getReferendumTitle()
  {
    return $this->referendumTitle;
  }

  public function setReferendumUrl($referendumUrl)
  {
    $this->referendumUrl = $referendumUrl;
  }

  public function getReferendumUrl()
  {
    return $this->referendumUrl;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }

  public function setSpecial($special)
  {
    $this->special = $special;
  }

  public function getSpecial()
  {
    return $this->special;
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

class Google_Service_CivicInfo_DivisionSearchResponse extends Google_Collection
{
  public $kind;
  protected $resultsType = 'Google_Service_CivicInfo_DivisionSearchResult';
  protected $resultsDataType = 'array';
  public $status;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_CivicInfo_DivisionSearchResult extends Google_Model
{
  public $name;
  public $ocdId;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOcdId($ocdId)
  {
    $this->ocdId = $ocdId;
  }

  public function getOcdId()
  {
    return $this->ocdId;
  }
}

class Google_Service_CivicInfo_Election extends Google_Model
{
  public $electionDay;
  public $id;
  public $name;

  public function setElectionDay($electionDay)
  {
    $this->electionDay = $electionDay;
  }

  public function getElectionDay()
  {
    return $this->electionDay;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}

class Google_Service_CivicInfo_ElectionOfficial extends Google_Model
{
  public $emailAddress;
  public $faxNumber;
  public $name;
  public $officePhoneNumber;
  public $title;

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }

  public function getFaxNumber()
  {
    return $this->faxNumber;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficePhoneNumber($officePhoneNumber)
  {
    $this->officePhoneNumber = $officePhoneNumber;
  }

  public function getOfficePhoneNumber()
  {
    return $this->officePhoneNumber;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}

class Google_Service_CivicInfo_ElectionsQueryResponse extends Google_Collection
{
  protected $electionsType = 'Google_Service_CivicInfo_Election';
  protected $electionsDataType = 'array';
  public $kind;

  public function setElections($elections)
  {
    $this->elections = $elections;
  }

  public function getElections()
  {
    return $this->elections;
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

class Google_Service_CivicInfo_ElectoralDistrict extends Google_Model
{
  public $id;
  public $name;
  public $scope;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setScope($scope)
  {
    $this->scope = $scope;
  }

  public function getScope()
  {
    return $this->scope;
  }
}

class Google_Service_CivicInfo_GeographicDivision extends Google_Collection
{
  public $name;
  public $officeIds;
  public $scope;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficeIds($officeIds)
  {
    $this->officeIds = $officeIds;
  }

  public function getOfficeIds()
  {
    return $this->officeIds;
  }

  public function setScope($scope)
  {
    $this->scope = $scope;
  }

  public function getScope()
  {
    return $this->scope;
  }
}

class Google_Service_CivicInfo_Office extends Google_Collection
{
  public $level;
  public $name;
  public $officialIds;
  protected $sourcesType = 'Google_Service_CivicInfo_Source';
  protected $sourcesDataType = 'array';

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficialIds($officialIds)
  {
    $this->officialIds = $officialIds;
  }

  public function getOfficialIds()
  {
    return $this->officialIds;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }
}

class Google_Service_CivicInfo_Official extends Google_Collection
{
  protected $addressType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $addressDataType = 'array';
  protected $channelsType = 'Google_Service_CivicInfo_Channel';
  protected $channelsDataType = 'array';
  public $emails;
  public $name;
  public $party;
  public $phones;
  public $photoUrl;
  public $urls;

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setChannels($channels)
  {
    $this->channels = $channels;
  }

  public function getChannels()
  {
    return $this->channels;
  }

  public function setEmails($emails)
  {
    $this->emails = $emails;
  }

  public function getEmails()
  {
    return $this->emails;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setParty($party)
  {
    $this->party = $party;
  }

  public function getParty()
  {
    return $this->party;
  }

  public function setPhones($phones)
  {
    $this->phones = $phones;
  }

  public function getPhones()
  {
    return $this->phones;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setUrls($urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }
}

class Google_Service_CivicInfo_PollingLocation extends Google_Collection
{
  protected $addressType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $addressDataType = '';
  public $endDate;
  public $id;
  public $name;
  public $notes;
  public $pollingHours;
  protected $sourcesType = 'Google_Service_CivicInfo_Source';
  protected $sourcesDataType = 'array';
  public $startDate;
  public $voterServices;

  public function setAddress(Google_Service_CivicInfo_SimpleAddressType $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setPollingHours($pollingHours)
  {
    $this->pollingHours = $pollingHours;
  }

  public function getPollingHours()
  {
    return $this->pollingHours;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }
}

class Google_Service_CivicInfo_RepresentativeInfoRequest extends Google_Model
{
  public $address;

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }
}

class Google_Service_CivicInfo_RepresentativeInfoResponse extends Google_Model
{
  protected $divisionsType = 'Google_Service_CivicInfo_GeographicDivision';
  protected $divisionsDataType = 'map';
  public $kind;
  protected $normalizedInputType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $normalizedInputDataType = '';
  protected $officesType = 'Google_Service_CivicInfo_Office';
  protected $officesDataType = 'map';
  protected $officialsType = 'Google_Service_CivicInfo_Official';
  protected $officialsDataType = 'map';
  public $status;

  public function setDivisions($divisions)
  {
    $this->divisions = $divisions;
  }

  public function getDivisions()
  {
    return $this->divisions;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNormalizedInput(Google_Service_CivicInfo_SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }

  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }

  public function setOffices($offices)
  {
    $this->offices = $offices;
  }

  public function getOffices()
  {
    return $this->offices;
  }

  public function setOfficials($officials)
  {
    $this->officials = $officials;
  }

  public function getOfficials()
  {
    return $this->officials;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}

class Google_Service_CivicInfo_SimpleAddressType extends Google_Model
{
  public $city;
  public $line1;
  public $line2;
  public $line3;
  public $locationName;
  public $state;
  public $zip;

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setLine1($line1)
  {
    $this->line1 = $line1;
  }

  public function getLine1()
  {
    return $this->line1;
  }

  public function setLine2($line2)
  {
    $this->line2 = $line2;
  }

  public function getLine2()
  {
    return $this->line2;
  }

  public function setLine3($line3)
  {
    $this->line3 = $line3;
  }

  public function getLine3()
  {
    return $this->line3;
  }

  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }

  public function getLocationName()
  {
    return $this->locationName;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setZip($zip)
  {
    $this->zip = $zip;
  }

  public function getZip()
  {
    return $this->zip;
  }
}

class Google_Service_CivicInfo_Source extends Google_Model
{
  public $name;
  public $official;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficial($official)
  {
    $this->official = $official;
  }

  public function getOfficial()
  {
    return $this->official;
  }
}

class Google_Service_CivicInfo_VoterInfoRequest extends Google_Model
{
  public $address;

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }
}

class Google_Service_CivicInfo_VoterInfoResponse extends Google_Collection
{
  protected $contestsType = 'Google_Service_CivicInfo_Contest';
  protected $contestsDataType = 'array';
  protected $earlyVoteSitesType = 'Google_Service_CivicInfo_PollingLocation';
  protected $earlyVoteSitesDataType = 'array';
  protected $electionType = 'Google_Service_CivicInfo_Election';
  protected $electionDataType = '';
  public $kind;
  protected $normalizedInputType = 'Google_Service_CivicInfo_SimpleAddressType';
  protected $normalizedInputDataType = '';
  protected $pollingLocationsType = 'Google_Service_CivicInfo_PollingLocation';
  protected $pollingLocationsDataType = 'array';
  protected $stateType = 'Google_Service_CivicInfo_AdministrationRegion';
  protected $stateDataType = 'array';
  public $status;

  public function setContests($contests)
  {
    $this->contests = $contests;
  }

  public function getContests()
  {
    return $this->contests;
  }

  public function setEarlyVoteSites($earlyVoteSites)
  {
    $this->earlyVoteSites = $earlyVoteSites;
  }

  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }

  public function setElection(Google_Service_CivicInfo_Election $election)
  {
    $this->election = $election;
  }

  public function getElection()
  {
    return $this->election;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNormalizedInput(Google_Service_CivicInfo_SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }

  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }

  public function setPollingLocations($pollingLocations)
  {
    $this->pollingLocations = $pollingLocations;
  }

  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
