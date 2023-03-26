<?php
namespace app\commands;

use app\components\okdesk\Transport;
use app\models\Issue;
use yii\console\Controller;
use yii\console\ExitCode;

class IssuesController extends Controller
{
    public function actionPull()
    {
        $Transport = new Transport();
        $issueIds = $Transport->getIssuesIds();

        foreach ($issueIds as $issueId)
        {
            $issueDetail = $Transport->getIssuesDetail($issueId);
            $Issue = new Issue();
            $Issue->setAttributes($issueDetail);
            $Issue->save();
        }

        return ExitCode::OK;
    }
}
