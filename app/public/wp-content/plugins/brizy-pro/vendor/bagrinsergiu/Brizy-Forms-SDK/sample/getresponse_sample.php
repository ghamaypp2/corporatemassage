
<?php

$composerAutoload = dirname(__DIR__) . '/vendor/autoload.php';
if (!file_exists($composerAutoload)) {
    echo "The 'vendor' folder is missing. You must run 'composer update' to resolve application dependencies.\nPlease see the README for more information.\n";
    exit(1);
}

require $composerAutoload;

//create getResponse service

$fields   = '[{"sourceId":"1", "sourceTitle":"Email", "target":"email"}, {"sourceId":"2", "sourceTitle":"My mmmfwef", "target":"_auto_generate"}]';
$fieldMap = new \BrizyForms\FieldMap(json_decode($fields, true));

$data = '[{"name":"2","value":"Anthony","required":false,"type":"text","slug":"name"},{"name":"1","value":"bodnar.brizy@gmail.com","required":false,"type":"email","slug":"email"}]';
$data = json_decode($data, true);

$dataArray = [];
foreach ($data as $row) {
    $data = new \BrizyForms\Model\Data();
    $data
        ->setName($row['name'])
        ->setValue($row['value']);
    $dataArray[] = $data;
}

$getResponseService = \BrizyForms\ServiceFactory::getInstance(\BrizyForms\ServiceFactory::GETRESPONSE);

$getResponseService->setAuthenticationData(new \BrizyForms\Model\AuthenticationData([
    'api_key' => '09eaf3ebaac4afb918c573d7da37d0c8'
]));

var_dump($getResponseService->authenticate());

var_dump($getResponseService->getAccount());

$groupData = new \BrizyForms\Model\GroupData([
    'name' => 'List'.rand(1,1000)
]);

$group = $getResponseService->createGroup($groupData);

var_dump($group);

$groups = $getResponseService->getGroups();

$active_group = null;
foreach ($groups as $group) {
    //var_dump($group);
    $active_group = $group->getId();
}

$fields = $getResponseService->getFields();

//var_dump($fields);

$getResponseService->createMember($fieldMap, $active_group, $dataArray);
