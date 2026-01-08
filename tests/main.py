from utils.tester import Tester
import argparse


def main():
    parser = argparse.ArgumentParser()
    parser.add_argument("-p", "--prod" ,action="store_true")
    args=parser.parse_args()

    tester = Tester(args.prod)
    tester.run_all()
    tester.quit()


if __name__ == "__main__":
    main()
