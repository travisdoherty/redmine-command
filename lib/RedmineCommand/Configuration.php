<?php
namespace RedmineCommand;

use Psr\Log\LogLevel;

define ('URL_CHANNELS_INFO', "https://slack.com/api/channels.info");
define ('URL_GROUPS_LIST',   "https://slack.com/api/groups.list");
define ('URL_ISSUES', "/issues/");

class Configuration {
  public $token;
  public $slack_webhook_url;
  public $api_channels_info_url;

  /**
   * Lookup channel name from channel id using Slack API, if set to
   * false then the channel id will be sent back to Slack unresolved
   * @var bool
   */
  public $api_resolve_channels;

  public $api_groups_list_url;
  public $slack_api_token;
  public $redmine_url;
  public $redmine_api_key;
  public $redmine_url_issues;
  public $log_level;
  public $default_channel;
  public $log_dir;
  public $db_dir;

  public function __construct () {
    $this->token = null;
    $this->slack_webhook_url = null;
    $this->api_channels_info_url = URL_CHANNELS_INFO;
    $this->api_resolve_channels = true;
    $this->api_groups_list_url = URL_GROUPS_LIST;
    $this->slack_api_token = null;
    $this->redmine_url = null;
    $this->redmine_api_key = null;
    $this->redmine_url_issues = URL_ISSUES;
    $this->log_level = LogLevel::DEBUG;
    $this->default_channel = null;
    $this->log_dir = "../../logs";
    $this->db_dir = "../../db";
  }

  public function getRedmineIssuesUrl () {
    return rtrim($this->redmine_url, '/') . $this->redmine_url_issues;
  }
}

