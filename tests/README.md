# How tu run selenium tests
## Requirements
Packages required for the scripts:
- unzip
- curl
- uv
  ```bash
  curl -LsSf https://astral.sh/uv/install.sh | sh
  ```

Installing python dependencies:
```bash
uv sync
``` 

Installing chromedrivers for linux-64:
```bash
make chrome
```

## Running the programme
```bash
make run
```