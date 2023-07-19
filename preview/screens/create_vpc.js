const puppeteer = require('puppeteer'); // v13.0.0 or later

(async () => {
    const browser = await puppeteer.launch({ headless: "new", args: ['--no-sandbox'] });
    const page = await browser.newPage();
    const timeout = 5000;
    page.setDefaultTimeout(timeout);

    {
        const targetPage = page;
        await targetPage.setViewport({
            width: 1029,
            height: 764
        })
    }
    {
        const targetPage = page;
        const promises = [];
        promises.push(targetPage.waitForNavigation());
        await targetPage.goto('https://ap-northeast-1.console.aws.amazon.com/vpc/home?region=ap-northeast-1#CreateVpc:createMode=vpcOnly');
        await Promise.all(promises);
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                '#awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label'
            ],
            [
                'xpath///*[@id="awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label"]'
            ],
            [
                'pierce/#awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label'
            ],
            [
                'text/VPC など'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                '#awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label'
            ],
            [
                'xpath///*[@id="awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label"]'
            ],
            [
                'pierce/#awsui-tiles-98-1689766830116-7486-value-CreateVPCWizard-label'
            ],
            [
                'text/VPC など'
            ]
        ], frame, { timeout, visible: true });
        await element.click({
          offset: {
            x: 50,
            y: 8,
          },
        });
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                'aria/名前タグの自動生成情報'
            ],
            [
                '#formField190-1689766844538-3973'
            ],
            [
                'xpath///*[@id="formField190-1689766844538-3973"]'
            ],
            [
                'pierce/#formField190-1689766844538-3973'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                'aria/名前タグの自動生成情報'
            ],
            [
                '#formField190-1689766844538-3973'
            ],
            [
                'xpath///*[@id="formField190-1689766844538-3973"]'
            ],
            [
                'pierce/#formField190-1689766844538-3973'
            ]
        ], frame, { timeout, visible: true });
        await element.click({
          offset: {
            x: 192,
            y: 8,
          },
        });
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await targetPage.keyboard.down('Meta');
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await targetPage.keyboard.down('a');
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await targetPage.keyboard.up('Meta');
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await targetPage.keyboard.up('a');
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                'aria/名前タグの自動生成情報'
            ],
            [
                '#formField190-1689766844538-3973'
            ],
            [
                'xpath///*[@id="formField190-1689766844538-3973"]'
            ],
            [
                'pierce/#formField190-1689766844538-3973'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                'aria/名前タグの自動生成情報'
            ],
            [
                '#formField190-1689766844538-3973'
            ],
            [
                'xpath///*[@id="formField190-1689766844538-3973"]'
            ],
            [
                'pierce/#formField190-1689766844538-3973'
            ]
        ], frame, { timeout, visible: true });
        const inputType = await element.evaluate(el => el.type);
        if (inputType === 'select-one') {
          await changeSelectElement(element, 'ecs-fargate-cicd')
        } else if ([
            'textarea',
            'text',
            'url',
            'tel',
            'search',
            'password',
            'number',
            'email'
        ].includes(inputType)) {
          await typeIntoElement(element, 'ecs-fargate-cicd');
        } else {
          await changeElementValue(element, 'ecs-fargate-cicd');
        }
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                'aria/AZ ごとに 1',
                'aria/[role="generic"]'
            ],
            [
                'div:nth-of-type(7) > div > div > div > div:nth-of-type(2) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(3) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[1]/div/div/div/div[2]/div/div[2]/div/div/div[7]/div/div/div/div[2]/div/div/div[3]/div/div/div/div/div/div[3]/button/span'
            ],
            [
                'pierce/div:nth-of-type(7) > div > div > div > div:nth-of-type(2) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(3) span'
            ],
            [
                'text/AZ ごとに 1'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                'aria/AZ ごとに 1',
                'aria/[role="generic"]'
            ],
            [
                'div:nth-of-type(7) > div > div > div > div:nth-of-type(2) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(3) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[1]/div/div/div/div[2]/div/div[2]/div/div/div[7]/div/div/div/div[2]/div/div/div[3]/div/div/div/div/div/div[3]/button/span'
            ],
            [
                'pierce/div:nth-of-type(7) > div > div > div > div:nth-of-type(2) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(3) span'
            ],
            [
                'text/AZ ごとに 1'
            ]
        ], frame, { timeout, visible: true });
        await element.click({
          offset: {
            x: 8.5,
            y: 9,
          },
        });
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                'div:nth-of-type(8) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(1) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[1]/div/div/div/div[2]/div/div[2]/div/div/div[8]/div/div/div[3]/div/div/div/div/div/div[1]/button/span'
            ],
            [
                'pierce/div:nth-of-type(8) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(1) span'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                'div:nth-of-type(8) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(1) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[1]/div/div/div/div[2]/div/div[2]/div/div/div[8]/div/div/div[3]/div/div/div/div/div/div[1]/button/span'
            ],
            [
                'pierce/div:nth-of-type(8) div.awsui_controls_14mhv_1n7cd_217 > div > div > div > div > div > div:nth-of-type(1) span'
            ]
        ], frame, { timeout, visible: true });
        await element.click({
          offset: {
            x: 15.09375,
            y: 1,
          },
        });
    }
    {
        const targetPage = page;
        let frame = targetPage.mainFrame();
        frame = frame.childFrames()[0];
        await scrollIntoViewIfNeeded([
            [
                'aria/VPC を作成',
                'aria/[role="generic"]'
            ],
            [
                'div.awsui_footer_1i0s3_uqbt5_118 > div > div > div > div:nth-of-type(2) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[2]/div/div/div/div[2]/button/span'
            ],
            [
                'pierce/div.awsui_footer_1i0s3_uqbt5_118 > div > div > div > div:nth-of-type(2) span'
            ]
        ], frame, timeout);
        const element = await waitForSelectors([
            [
                'aria/VPC を作成',
                'aria/[role="generic"]'
            ],
            [
                'div.awsui_footer_1i0s3_uqbt5_118 > div > div > div > div:nth-of-type(2) span'
            ],
            [
                'xpath///*[@id="networking-react"]/div/awsui-app-layout/div/main/div[2]/div/div[2]/span/div/div/div[3]/div/div[1]/div/div[2]/div/div/div/div[2]/button/span'
            ],
            [
                'pierce/div.awsui_footer_1i0s3_uqbt5_118 > div > div > div > div:nth-of-type(2) span'
            ]
        ], frame, { timeout, visible: true });
        await element.click({
          offset: {
            x: 53.984375,
            y: 2,
          },
        });
    }

    await browser.close();

    async function waitForSelectors(selectors, frame, options) {
      for (const selector of selectors) {
        try {
          return await waitForSelector(selector, frame, options);
        } catch (err) {
          console.error(err);
        }
      }
      throw new Error('Could not find element for selectors: ' + JSON.stringify(selectors));
    }

    async function scrollIntoViewIfNeeded(selectors, frame, timeout) {
      const element = await waitForSelectors(selectors, frame, { visible: false, timeout });
      if (!element) {
        throw new Error(
          'The element could not be found.'
        );
      }
      await waitForConnected(element, timeout);
      const isInViewport = await element.isIntersectingViewport({threshold: 0});
      if (isInViewport) {
        return;
      }
      await element.evaluate(element => {
        element.scrollIntoView({
          block: 'center',
          inline: 'center',
          behavior: 'auto',
        });
      });
      await waitForInViewport(element, timeout);
    }

    async function waitForConnected(element, timeout) {
      await waitForFunction(async () => {
        return await element.getProperty('isConnected');
      }, timeout);
    }

    async function waitForInViewport(element, timeout) {
      await waitForFunction(async () => {
        return await element.isIntersectingViewport({threshold: 0});
      }, timeout);
    }

    async function waitForSelector(selector, frame, options) {
      if (!Array.isArray(selector)) {
        selector = [selector];
      }
      if (!selector.length) {
        throw new Error('Empty selector provided to waitForSelector');
      }
      let element = null;
      for (let i = 0; i < selector.length; i++) {
        const part = selector[i];
        if (element) {
          element = await element.waitForSelector(part, options);
        } else {
          element = await frame.waitForSelector(part, options);
        }
        if (!element) {
          throw new Error('Could not find element: ' + selector.join('>>'));
        }
        if (i < selector.length - 1) {
          element = (await element.evaluateHandle(el => el.shadowRoot ? el.shadowRoot : el)).asElement();
        }
      }
      if (!element) {
        throw new Error('Could not find element: ' + selector.join('|'));
      }
      return element;
    }

    async function waitForElement(step, frame, timeout) {
      const {
        count = 1,
        operator = '>=',
        visible = true,
        properties,
        attributes,
      } = step;
      const compFn = {
        '==': (a, b) => a === b,
        '>=': (a, b) => a >= b,
        '<=': (a, b) => a <= b,
      }[operator];
      await waitForFunction(async () => {
        const elements = await querySelectorsAll(step.selectors, frame);
        let result = compFn(elements.length, count);
        const elementsHandle = await frame.evaluateHandle((...elements) => {
          return elements;
        }, ...elements);
        await Promise.all(elements.map((element) => element.dispose()));
        if (result && (properties || attributes)) {
          result = await elementsHandle.evaluate(
            (elements, properties, attributes) => {
              for (const element of elements) {
                if (attributes) {
                  for (const [name, value] of Object.entries(attributes)) {
                    if (element.getAttribute(name) !== value) {
                      return false;
                    }
                  }
                }
                if (properties) {
                  if (!isDeepMatch(properties, element)) {
                    return false;
                  }
                }
              }
              return true;

              function isDeepMatch(a, b) {
                if (a === b) {
                  return true;
                }
                if ((a && !b) || (!a && b)) {
                  return false;
                }
                if (!(a instanceof Object) || !(b instanceof Object)) {
                  return false;
                }
                for (const [key, value] of Object.entries(a)) {
                  if (!isDeepMatch(value, b[key])) {
                    return false;
                  }
                }
                return true;
              }
            },
            properties,
            attributes
          );
        }
        await elementsHandle.dispose();
        return result === visible;
      }, timeout);
    }

    async function querySelectorsAll(selectors, frame) {
      for (const selector of selectors) {
        const result = await querySelectorAll(selector, frame);
        if (result.length) {
          return result;
        }
      }
      return [];
    }

    async function querySelectorAll(selector, frame) {
      if (!Array.isArray(selector)) {
        selector = [selector];
      }
      if (!selector.length) {
        throw new Error('Empty selector provided to querySelectorAll');
      }
      let elements = [];
      for (let i = 0; i < selector.length; i++) {
        const part = selector[i];
        if (i === 0) {
          elements = await frame.$$(part);
        } else {
          const tmpElements = elements;
          elements = [];
          for (const el of tmpElements) {
            elements.push(...(await el.$$(part)));
          }
        }
        if (elements.length === 0) {
          return [];
        }
        if (i < selector.length - 1) {
          const tmpElements = [];
          for (const el of elements) {
            const newEl = (await el.evaluateHandle(el => el.shadowRoot ? el.shadowRoot : el)).asElement();
            if (newEl) {
              tmpElements.push(newEl);
            }
          }
          elements = tmpElements;
        }
      }
      return elements;
    }

    async function waitForFunction(fn, timeout) {
      let isActive = true;
      const timeoutId = setTimeout(() => {
        isActive = false;
      }, timeout);
      while (isActive) {
        const result = await fn();
        if (result) {
          clearTimeout(timeoutId);
          return;
        }
        await new Promise(resolve => setTimeout(resolve, 100));
      }
      throw new Error('Timed out');
    }

    async function changeSelectElement(element, value) {
      await element.select(value);
      await element.evaluateHandle((e) => {
        e.blur();
        e.focus();
      });
    }

    async function changeElementValue(element, value) {
      await element.focus();
      await element.evaluate((input, value) => {
        input.value = value;
        input.dispatchEvent(new Event('input', { bubbles: true }));
        input.dispatchEvent(new Event('change', { bubbles: true }));
      }, value);
    }

    async function typeIntoElement(element, value) {
      const textToType = await element.evaluate((input, newValue) => {
        if (
          newValue.length <= input.value.length ||
          !newValue.startsWith(input.value)
        ) {
          input.value = '';
          return newValue;
        }
        const originalValue = input.value;
        input.value = '';
        input.value = originalValue;
        return newValue.substring(originalValue.length);
      }, value);
      await element.type(textToType);
    }
})().catch(err => {
    console.error(err);
    process.exit(1);
});
