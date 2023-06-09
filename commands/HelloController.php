<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\components\okdesk\Transport;
use app\models\Company;
use app\models\Issue;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
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
