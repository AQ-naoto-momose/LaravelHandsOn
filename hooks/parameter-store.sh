#!/bin/bash

# .envファイルのパスを指定
ENV_FILE_PATH="./app/.env"

# パラメータをParameter Storeにプレフィックス付きで登録
PARAMETER_STORE_PREFIX="/ecs-fargate-cicd/"

while IFS='=' read -r key value || [ -n "$key" ]; do
  if [ ! -z "$key" ]; then
    # 空白行を無視
    aws ssm put-parameter --name "${PARAMETER_STORE_PREFIX}${key}" --type "String" --value "${value}" --overwrite
    echo "登録: ${PARAMETER_STORE_PREFIX}${key} = ${value}"
  fi
done < "$ENV_FILE_PATH"