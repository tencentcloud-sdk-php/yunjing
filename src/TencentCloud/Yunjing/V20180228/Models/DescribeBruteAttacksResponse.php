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
 * DescribeBruteAttacks返回参数结构体
 *
 * @method integer getTotalCount() 获取事件数量
 * @method void setTotalCount(integer $TotalCount) 设置事件数量
 * @method array getBruteAttacks() 获取暴力破解事件列表
 * @method void setBruteAttacks(array $BruteAttacks) 设置暴力破解事件列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBruteAttacksResponse extends AbstractModel
{
    /**
     * @var integer 事件数量
     */
    public $TotalCount;

    /**
     * @var array 暴力破解事件列表
     */
    public $BruteAttacks;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 事件数量
     * @param array $BruteAttacks 暴力破解事件列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("BruteAttacks",$param) and $param["BruteAttacks"] !== null) {
            $this->BruteAttacks = [];
            foreach ($param["BruteAttacks"] as $key => $value){
                $obj = new BruteAttack();
                $obj->deserialize($value);
                array_push($this->BruteAttacks, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
