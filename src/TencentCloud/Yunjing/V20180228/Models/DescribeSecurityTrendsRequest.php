<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityTrends请求参数结构体
 *
 * @method string getBeginDate() 获取开始时间。
 * @method void setBeginDate(string $BeginDate) 设置开始时间。
 * @method string getEndDate() 获取结束时间。
 * @method void setEndDate(string $EndDate) 设置结束时间。
 */
class DescribeSecurityTrendsRequest extends AbstractModel
{
    /**
     * @var string 开始时间。
     */
    public $BeginDate;

    /**
     * @var string 结束时间。
     */
    public $EndDate;

    /**
     * @param string $BeginDate 开始时间。
     * @param string $EndDate 结束时间。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
