# pipedrive_api

Unofficial PHP client for the Pipedrive REST API v1 (API key auth).

## Install

```bash
composer require michalper/pipedrive_api
```

## Usage

```php
$client = new PipedriveClient();
$client->setApiKey('...')->setDomain('your-company');

$deals = $client->deals->search(new SearchModel());
$deal = $client->deals->add($dealModel);
$client->deals->addParticipantToDeal($dealId, $personId);
$found = $client->deals->findDealsByName('Acme Corp');
```

Nine services cover most of Pipedrive's object model: `deals`, `persons`, `activities`, `notes`, `pipelines`, `stages`, `search`, `userSettings`, `webhooks`. Built against the [Pipedrive API v1 docs](https://developers.pipedrive.com/docs/api/v1/).

## License

GNU GPL
